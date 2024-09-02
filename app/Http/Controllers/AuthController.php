<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerSubmit(Request $request){
        $request->validate([
            'name'=>'required|string|min:2|max:30',
            'email'=>'required|email',
            'password'=>'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= Hash::make($request->password);
        if($user->save()){
            return redirect()->route('auth.login')->with('success','User Registered Successfully!!!');
        }else{
            return redirect()->back()->with('error','Failed to Register User');
        }
    }

    public function login(){
        return view('auth.login');
    }

    public function loginSubmit(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|string|min:8'
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('home')->with('success','User Login Successfully!!!');
        }else{
            return redirect()->back()->with('error','Failed to Login');
        }
    }
}
