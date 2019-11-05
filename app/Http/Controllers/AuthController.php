<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with('ERR', 'Username dan password tidak cocok.');
        }

        return redirect()->route('dashboard.greeting.index');
    }
}
