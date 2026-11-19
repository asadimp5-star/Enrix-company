<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($local)
    {
        return view('admin.admin-profile.admin-profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function showUserPass($local,User $user)
    {
        return view('admin.admin-profile.cheng-pass',compact('user'));
    }

    public function userPass($local,Request $request, User $user)
    {
       
        $data = $request->validate([
            'password'=>'required|min:8|confirmed'
        ]);
        
        $user->update($data);
        Auth::logout();
        return to_route('contact')->with('success','Password changed successfully.');

    }

    public function useremail($local,User $user)
    {
        return view('admin.admin-profile.chenge-email',compact('user'));
    }

    public function UserEmailCheng($locale,Request $request , User $user)
    {
        $data = $request->validate([
            'email'=>['required','email',
            Rule::unique('users')],
        ]);
        
        $user ->update($data);
        $user->save($data);
        
        Auth::logout();
        return to_route('contact')->with('success','Email address changed successfully.');


    }
}
