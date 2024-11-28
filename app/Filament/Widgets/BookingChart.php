<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Booking;
use Filament\Widgets\ChartWidget;

class BookingChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    public ?string $filter = 'week';
    public static ?int $sort = 2;

    // protected function getData(): array
    // {
    //     $statuses = ['Pending', 'Accepted', 'Rejected'];
    //     $counts = [];

    //     foreach ($statuses as $status) {
    //         $counts[] = Booking::where('status', $status)->count();
    //     }

    //     return [
    //         'datasets' => [
    //             [
    //                 'label' => 'Booking Status',
    //                 'data' => $counts,
    //                 'backgroundColor' => ['#FFCE56', '#36A2EB', '#FF6384'], // Colors for each status
    //             ],
    //         ],
    //         'labels' => $statuses,
    //     ];
    // }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getFilters(): array
    {
        return [
            'weekly' => 'Weekly',
            'monthly' => 'Monthly',
            'yearly' => 'Yearly',
        ];
    }

    // Modify the getData() method to fetch data based on the filter
    protected function getData(): array
    {
        $statuses = ['Pending', 'Accepted', 'Rejected'];
        $counts = [];

        // Determine the date range based on the selected filter
        $startDate = match ($this->filter) {
            'monthly' => Carbon::now()->startOfMonth(),
            'yearly' => Carbon::now()->startOfYear(),
            default => Carbon::now()->startOfWeek(),
        };

        $endDate = Carbon::now()->endOfDay();

        // Fetch data within the date range
        foreach ($statuses as $status) {
            $counts[] = Booking::where('status', $status)
                ->whereBetween('created_at', [$startDate, $endDate])
                ->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Booking Status',
                    'data' => $counts,
                    'backgroundColor' => ['#FFCE56', '#36A2EB', '#FF6384'], // Colors for each status
                ],
            ],
            'labels' => $statuses,
        ];
    }
}
