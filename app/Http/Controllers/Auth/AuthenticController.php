<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticController extends Controller
{
    public function register($local)
    {
        return view('front-client.register');
    }

    public function registering($local,UserRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return back()->with('success','register successfull');
    }

    public function login($local)
    {
        return view('front-client.login');
    }
    public function getIn($local,Request $request )
    {
      
        if(Auth::attempt($request->validate([
            'email'=> 'required|email|exists:users,email',
            'password'=>'required|min:8'
        ]))){
            $request->session()->regenerate();
              
                return to_route('/admin');
            
                
            }
            
        return back()->withErrors([
            'email'=>'Incorrect email or password.'
        ]);

    }
    public function logOute(Request $request)
    {
        
         Auth::logout();
 
    return to_route('home');
    }
}
