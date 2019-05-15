<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $validateData = $request->validate([
            'email'=>'required',
            'name'=>'required',
            'password'=> 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->name);

        $user->save();

    }

    public function  login(){

    }
}
