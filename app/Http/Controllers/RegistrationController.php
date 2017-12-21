<?php

namespace App\Http\Controllers;

use App\User;
use validator;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //

    public function create()
    {
        return view('user.signup');
    }

     public function store(Request $request)
    {

          //validate the form request
        $request ->validate([
            'first_Name' => 'required',
            'last_Name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
        ]);
        

        //create a new user

        User::create(request(['first_name','last_name','country','state','city','email','password']));
        
        
        
        //sign them in

        auth()->login($user);

        // return redirect()->route('shop.index');
        return redirect()->home();
        

    }
}
