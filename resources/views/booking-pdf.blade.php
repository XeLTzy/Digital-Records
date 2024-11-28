<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Status</title>
</head>

<body>
    <h1>Booking Details</h1>
    <p><strong>Status:</strong> {{ $record->status ?? 'N/A' }}</p>
    <p><strong>Date:</strong>{{ \Carbon\Carbon::parse($record->date)->format('F j, Y') }}
    </p>
    <p><strong>Time:</strong> {{ $record->start_time ?? 'N/A' }}</p>
    <p><strong>Patient Name:</strong> {{ $record->patient->full_name ?? 'N/A' }}</p>
    <h2>Avail Services</h2>
    @if($record->availServices->isNotEmpty())
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($record->availServices as $availService)
            <tr>
                <td>{{ $availService->service->name ?? 'N/A' }}</td>
                <td>{{ $availService->service->description ?? 'N/A' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No services are associated with this booking.</p>
    @endif

</body>

</html>