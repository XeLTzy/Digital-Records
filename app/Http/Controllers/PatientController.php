<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\Appointment;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dump("AA");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'firstname' => ['required', 'string', 'min:2', 'max:255'],
                'middlename' => ['nullable', 'string', 'min:1', 'max:20'],
                'lastname' => ['required', 'string', 'min:2', 'max:255'],
                'phonenumber' => ['required', 'string', 'min:11'],
                'gender' => ['required', 'string', 'min:2', 'max:255'],
                'birthday' => ['required', 'string', 'min:7', 'max:11'], // Validate against patients table
                'city' => ['required', 'string', 'min:3', 'max:255'], // Validate against users table
                'barangay' => ['required', 'string', 'min:3', 'max:255'],
                'street' => ['required', 'string', 'min:3', 'max:255'],
                'housenumber' => ['required', 'string', 'min:3', 'max:10']
            ]);

            // Create the user
            Patient::create([
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'lastname' => $request->lastname,
                'phonenumber' => $request->phonenumber,
                'gender' => $request->gender,
                'birthday' => $request->birthday, // Validate against patients table
                'city' => $request->city, // Validate against users table
                'barangay' => $request->barangay,
                'street' => $request->street,
                'housenumber' => $request->housenumber
            ]);

            $appointments = Appointment::all();
            return view('dashboard', ['appointments' => compact('appointments')]);
        } catch (\Exception $e) {
            var_dump("d");
            dump($e);
            // Log the error message and stack trace
            // Log::error('Booking Error: ' . $e->getMessage(), ['stack' => $e->getTraceAsString()]);
            
            // Optionally, return an error response
            // return back()->withInput($request->input())->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
