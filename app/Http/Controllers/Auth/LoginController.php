<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index () {
        return view('auth.login');
    }

    public function log(Request $request) {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($data)) {
            return redirect()->route('login');
        }

        return redirect()->route('loginForm')->withErrors(['email' => 'Невереные учетные данные']);
    }

    public function logout () {
        Auth::logout();
        return redirect()->route ('home');
    }
}
