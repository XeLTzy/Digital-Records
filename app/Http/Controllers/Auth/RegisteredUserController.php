<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'firstname' => ['required', 'string',  'min:2', 'max:255'],
    //         'middlename' => ['nullable', 'string',  'min:1', 'max:20'],
    //         'lastname' => ['required', 'string',  'min:2', 'max:255'],
    //         'suffix' => ['nullable', 'string',  'min:2', 'max:255'],
    //         'number' => ['required', 'string',  'min:11', 'max:11', 'unique:' . User::class],
    //         'birthday' => ['required', 'date'],
    //         // 'gender' => ['required', 'date',  'min:10', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     $user = User::create([
    //         'firstname' => $request->firstname,
    //         'middlename' => $request->middlename,
    //         'lastname' => $request->lastname,
    //         'suffix' => $request->suffix,
    //         'number' => $request->number,
    //         'birthday' => $request->birthday,
    //         'gender' => $request->gender,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'role' => 'client',
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(route('dashboard', absolute: false));
    // }

    public function store(Request $request): RedirectResponse
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'firstname' => ['required', 'string', 'min:2', 'max:255'],
                'middlename' => ['nullable', 'string', 'min:1', 'max:20'],
                'lastname' => ['required', 'string', 'min:2', 'max:255'],
                'suffix' => ['nullable', 'string', 'min:2', 'max:255'],
                'number' => ['nullable', 'string', 'min:11', 'max:11', 'unique:patients,number'], // Validate against patients table
                'birthday' => ['required', 'date'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'], // Validate against users table
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            // Create the user
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'client', // Assign the 'client' role
            ]);

            // Create the patient record linked to the user
            $user->patient()->create([
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'lastname' => $request->lastname,
                'suffix' => $request->suffix,
                'number' => $request->number,
                'birthday' => $request->birthday,
            ]);

            event(new Registered($user));

            Auth::login($user);

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            // Log the error message and stack trace
            Log::error('Registration Error: ' . $e->getMessage(), ['stack' => $e->getTraceAsString()]);

            // Optionally, return an error response
            return redirect()->back()->withErrors([
                'error' => 'An error occurred during registration. Please try again later.',
            ]);
        }
    }
}
