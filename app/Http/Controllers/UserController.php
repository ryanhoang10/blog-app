<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
    
    }

    public function edit(Request $request)
    {
    
    }

    public function login(Request $request)
    {
        $this->validate(request(), [
            'user'     => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->user)->first();

        if (Hash::check($request->password, $user->password)) {
            echo 'pass';
        }

        echo 'fail'; 
    }

    public function loginPage()
    {
        return view('login-register');
    }
}
