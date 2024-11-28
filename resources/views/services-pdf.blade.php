<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avail Services Report</title>
</head>

<body>
    <h1>Avail Services Report</h1>
    <p><strong>Date Range:</strong>
        {{ \Carbon\Carbon::parse($from)->format('F j, Y') }} -
        {{ \Carbon\Carbon::parse($to)->format('F j, Y') }}
    </p>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Service Name</th>
                <th>Category</th>
                <th>Booking ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($availServices as $availService)
            <tr>
                <td>{{ $availService->service->name ?? 'N/A' }}</td>
                <td>{{ $availService->service->category ?? 'N/A' }}</td>
                <td>{{ $availService->booking->id ?? 'N/A' }}</td> <!-- Corrected this line -->
                <td>{{ $availService->date ? \Carbon\Carbon::parse($availService->date)->format('F j, Y') : 'N/A' }}</td>
                <td>{{ $availService->time ?? 'N/A' }}</td>
                <td>{{ $availService->created_at ? \Carbon\Carbon::parse($availService->created_at)->format('F j, Y H:i A') : 'N/A' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align: center;">No available services found for the selected date range.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>