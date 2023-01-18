<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserInfoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function show(Request $request)
    {
        return view('user.settings');
    }

    public function updateUserInfo(UpdateUserInfoRequest $request)
    {
        $data = $request->validated();
        $data['is_male'] = ($data['gender'] == "male") ? true : false;
        unset($data['gender']);
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $request->user()->update($data);
        return redirect()->back()->with('success', 'User info updated successfully');
    }
}
