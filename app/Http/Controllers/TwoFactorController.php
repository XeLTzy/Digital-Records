<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TwoFactorController extends Controller
{


    public function index()
    {

        $user = auth()->user();
        $code = rand(10000, 999999);
        $user->two_factor_code = $code;
        $user->save();

        Mail::raw("Your two-factor code is $code", function ($message) use ($user) {
            $message->to($user->email)->subject('Two-Factor Code');
        });

        return view('auth.two-factor');
    }

    public function verify(Request $request)
    {

        $request->validate([
            'code' => 'required|integer'
        ]);

        $user = auth()->user();

        if ($request->code == $user->two_factor_code) {
            session(['two_factor_authenticated' => true]);
            return redirect()->intended('/client_dashboard');
        }

        // return redirect()->route('/two-factor.index')->withErrors(['code' => 'Code is incorrect']);
        // Redirect using the correct route name
        return redirect()->route('two-factor.index')->withErrors(['code' => 'Code is incorrect']);
    }
}
