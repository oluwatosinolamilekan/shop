<?php

namespace App\Http\Controllers;

use App\User;
use validator;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //


    public function login()
    {
        //
        return view('user.login');
        

    }

    public function postlogin()
    {
        $request ->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        
    }

    public function store ()
    {
        

    }

    public function forgetpassword()
    {
        //
        return view('user.forgetpassword');
        

    }

    public function destroy()
    {
        
        auth()->logout();
        return redirect()->home();
        

    }
}
