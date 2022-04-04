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

    public function logout(Request $request)
    {
    
    }

    public function account()
    {
        
    }
    
    public function login(Request $request)
    {
        $this->validate(request(), [
            'user'     => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->user)->first();

        if(! $user) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
        }

        if (Hash::check($request->password, $user->password)) {
            session()->put('user', $user->email);
            session()->put('name', $user->name);
            return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
        }

        return response()->json(['success'=>false, 'message' => 'Login Fail, please check password']);
    }

    public function loginPage()
    {
        return view('login-register');
    }
}
