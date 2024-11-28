<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RecordController extends Controller
{
    public function create(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'firstname' => ['required', 'string', 'min:2', 'max:255'],
                'middlename' => ['nullable', 'string', 'min:1', 'max:20'],
                'lastname' => ['required', 'string', 'min:2', 'max:255'],
                'suffix' => ['nullable', 'string', 'min:2', 'max:255'],
                'number' => ['nullable', 'string', 'min:11', 'max:11'], // Validate against patients table
                'email' => ['required', 'string', 'email', 'max:255'], // Validate against users table
                'date' => ['required', 'date'],
                'time' => ['required'],
            ]);

            // Create the user
            $user = Appointment::create([
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'lastname' => $request->lastname,
                'suffix' => $request->suffix,
                'contactnumber' => $request->number,
                'email' => $request->email,
                'date' => $request->date,
                'time' => $request->time,
            ]);

            return redirect()->route('form');
        } catch (\Exception $e) {
            var_dump("d");
            dump($e);
            // Log the error message and stack trace
            Log::error('Booking Error: ' . $e->getMessage(), ['stack' => $e->getTraceAsString()]);
            
            // Optionally, return an error response
            // return back()->withInput($request->input())->withError($e->getMessage());
        }
    }
}
