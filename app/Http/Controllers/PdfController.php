<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Services;
use App\Models\AvailService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class PdfController extends Controller
{

    public function download($order)
    {
        // Eager-load the patient relationship
        $record = Booking::with(['patient.user', 'availServices.service'])->findOrFail($order);
        $record->load(['patient', 'availServices.service']);
        return Pdf::loadView('booking-pdf', ['record' => $record])
            ->download('Booking-' . $record->id . '.pdf');
    }

    // public function downloadServices(Request $request)
    // {
    //     $validated = $request->validate([
    //         'from' => 'required|date',
    //         'to' => 'required|date|after_or_equal:from',
    //     ]);

    //     // Proceed with query
    //     $availServices = AvailService::with(['service', 'booking.patient'])
    //         ->whereBetween('created_at', [$validated['from'], $validated['to']])
    //         ->orderBy('created_at', 'asc')
    //         ->get();

    //     return Pdf::loadView('services-pdf', [
    //         'availServices' => $availServices,
    //         'from' => $validated['from'],
    //         'to' => $validated['to'],
    //     ])->download('Avail-Services-' . now()->format('Ymd') . '.pdf');
    // }

    public function downloadServices(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');
        if (!$from || !$to) {
            abort(400, 'Invalid date range');
        }
        try {
            $from = \Carbon\Carbon::parse($from);
            $to = \Carbon\Carbon::parse($to);
            Log::info('Fetching services for PDF', ['from' => $from->toDateString(), 'to' => $to->toDateString(),]);
            $availServices = AvailService::with(['service', 'booking'])->whereBetween('created_at', [$from, $to])->get();
            return Pdf::loadView('services-pdf', compact('availServices', 'from', 'to'))->download('Services-Report.pdf');
        } catch (\Exception $e) {
            Log::error('Error generating services PDF', ['error' => $e->getMessage()]);
            abort(500, 'Failed to generate report');
        }
    }
}
