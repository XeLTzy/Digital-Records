<?php

namespace App\Filament\Resources\NoResource\Widgets;

use Carbon\Carbon;
use App\Models\Booking;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Log;
use App\Filament\Resources\BookingResource;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;


class CalendarWidget extends FullCalendarWidget
{

    // protected static string $view = 'filament.resources.no-resource.widgets.calendar-widget';

    // public function fetchEvents(array $fetchInfo): array
    // {
    //     $events = Booking::query()
    //         ->where('date', '>=', $fetchInfo['start'])
    //         ->where('start_time', '<=', $fetchInfo['end'])
    //         ->get()
    //         ->map(
    //             fn(Booking $event) => EventData::make()
    //                 ->id($event->id ?? 'id')
    //                 ->title($event->status ?? 'No status available')
    //                 ->start(Carbon::parse($event->date . ' ' . $event->start_time)->toIso8601String())
    //                 ->end(Carbon::parse($event->date . ' ' . $event->end_time)->toIso8601String())
    //                 ->url(
    //                     url: BookingResource::getUrl(name: 'view', parameters: ['record' => $event]),
    //                     shouldOpenUrlInNewTab: true
    //                 )
    //         )
    //         ->toArray();

    //     // Log to check if events are correctly mapped
    //     Log::info($events);

    //     return $events;
    // }

    public function fetchEvents(array $fetchInfo): array
    {
        return Booking::with('patient') // Eager load bookPatient relationship
            ->where('status', 'Accepted')
            ->get()
            ->map(
                fn(Booking $event) => EventData::make()
                    ->id($event->id ?? 'default-id')
                    ->title($event->patient?->full_name ?? 'No Patient') // Use the full name from bookPatient
                    ->start(Carbon::parse("{$event->date} {$event->time}")->toDateTimeString()) // Start time
                    ->end(Carbon::parse("{$event->date} {$event->time}")->addMinutes(30)->toDateTimeString()) // End time 30 minutes later
                    ->url(
                        url: BookingResource::getUrl(name: 'view', parameters: ['record' => $event]),
                        shouldOpenUrlInNewTab: true
                    )
            )
            ->toArray();
    }
}
