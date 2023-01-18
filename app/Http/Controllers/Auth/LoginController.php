<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            return back()->withErrors(['email' => 'Invalid login details'])->with("error", "Invalid login details");
        }

        return redirect()->route('index')->with('success', 'Welcome Back 🥰 !');
    }
}
