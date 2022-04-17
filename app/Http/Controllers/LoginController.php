<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif (auth()->user()->role == 'owner') {
                return redirect('/pengelola/dashboard');
            }
        }

        Alert::error('Login Failed', 'Silakan persiksa kembali email dan password anda')->autoClose(0);

        return redirect()->back()->withInput();
    }
}
