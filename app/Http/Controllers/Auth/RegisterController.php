<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function createUser(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect()->route('index')->with('success', 'Welcome To The Family 🥰 !');
    }
}
