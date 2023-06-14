<?php

namespace App\Http\Controllers;

use Illuminate\Moddels\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        // if (auth()) {  //jika sudah ter autentiksi maka akan redirect ke halaman dashboard
        //     return redirect()->route('dashboard');
        // }
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('dashboard');
        // }

         if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('error', 'Email atau password salah');
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our record.',
        // ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('landing');
    }
}
