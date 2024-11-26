<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Widgets\ChartWidget;

class BookingChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    public static ?int $sort = 2;

    protected function getData(): array
    {
        $statuses = ['Pending', 'Accepted', 'Rejected'];
        $counts = [];

        foreach ($statuses as $status) {
            $counts[] = Booking::where('status', $status)->count();
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

    protected function getType(): string
    {
        return 'line';
    }
}
