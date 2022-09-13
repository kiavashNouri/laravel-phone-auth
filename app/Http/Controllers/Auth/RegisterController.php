<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');

    }

    public function register(Request $request)
    {
        $validData = $request->validate([
            'name' => ['required' , 'string' , 'max:255' , 'min:3'],
            'phone' => ['required' , 'regex:/^09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}$/' ,'unique:users,phone']
        ]);

        User::create($validData);

        // auth()->success();
        return redirect(route('auth.login'));

    }
}
