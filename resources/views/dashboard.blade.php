<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div>
            <h2>Total Appointment: </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->time }}</td>
                                        <td>{{ $appointment->date }}</td>
                                        <td>{{ $appointment->firstname . " " . $appointment->middlename . " " . $appointment->lastname }}</td>
                                        <td>{{ $appointment->email }}</td>
                                        <td>{{ $appointment->contactnumber }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
