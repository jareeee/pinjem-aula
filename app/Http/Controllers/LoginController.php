<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function show(){
        return view('login-signup.login');
    }

    public function store()
    {
        $user = Validate::user([
            'username' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
    }
}
