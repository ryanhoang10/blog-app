<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {

        $current_user = User::where('email', $request->registerEmail);

        if ($current_user) {
            return response()->json(['success' => false, 'message' => 'Email has already been registered.']);
        }

        $new_user = new User();

        session()->put('user', $request->registerEmail);
        session()->put('name', $request->registerName);

        $new_user->email = $request->registerEmail;
        $new_user->name = $request->registerName;
        $new_user->password = Hash::make($request->registerPassword);
        $new_user->email_verified_at = Carbon::now();
        $new_user->created_at = Carbon::now();
        $new_user->updated_at = Carbon::now();

        $new_user->save();
        return response()->json(['success' => true, 'message' => 'Account has been registered!']);
    }

    public function edit(Request $request)
    {
    
    }

    public function logout(Request $request)
    {
        session()->flush();

        return response()->json(['success' => true, 'message' => 'You have logged out.']);
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
