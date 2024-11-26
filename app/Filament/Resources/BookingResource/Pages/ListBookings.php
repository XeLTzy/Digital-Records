<?php

namespace App\Filament\Resources\BookingResource\Pages;

use App\Filament\Resources\BookingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make()
                ->badge(\App\Models\Booking::count())
                ->modifyQueryUsing(function (Builder $query) {
                    return $query;
                }),
            'Pending' => Tab::make()
                ->badge(\App\Models\Booking::where('status', 'Pending')->count())
                ->modifyQueryUsing(function (Builder $query) {
                    $query->where('status', 'Pending');
                }),
            'Accepted' => Tab::make()
                ->badge(\App\Models\Booking::where('status', 'Accepted')->count())
                ->modifyQueryUsing(function (Builder $query) {
                    $query->where('status', 'Accepted');
                }),
            'Rejected' => Tab::make()
                ->badge(\App\Models\Booking::where('status', 'Rejected')->count())
                ->modifyQueryUsing(function (Builder $query) {
                    $query->where('status', 'Rejected');
                }),
        ];
    }
}
