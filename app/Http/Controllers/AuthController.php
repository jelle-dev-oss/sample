<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter; // built-in nani sa laravel 

class AuthController extends Controller
{
    // Login page
    public function showLogin()
    {
        return view('auth.login');
    }

    //pers thing to do mo login bai
    public function login(Request $request)
    {
  
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //based on the email and ip
        $lockKey = 'login-attempts:' . $request->email . ':' . $request->ip();

        //login attempts
        if (RateLimiter::tooManyAttempts($lockKey, 5)) {
            $seconds = RateLimiter::availableIn($lockKey);
            $minutes = ceil($seconds / 60);
            return back()->with('error', "Paghuwat ang kol, naa kay $minutes minutes.");
        }

        
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            RateLimiter::clear($lockKey);
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
        //mogawas ni basta mali ang email or password
        RateLimiter::hit($lockKey, 600);

        return back()->with('error', 'ekis ka sakin bai.')->withInput($request->only('email'));
    }

    // logout naka bai
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}