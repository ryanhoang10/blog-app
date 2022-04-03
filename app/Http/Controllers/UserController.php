<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    }

    public function loginPage()
    {
        return view('login-register');
    }
}
