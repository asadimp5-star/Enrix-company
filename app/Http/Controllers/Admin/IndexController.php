<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $messages = Message::orderByDesc('id')->paginate(10);
        return view('admin.dashboard',compact('messages'));
    }

    public function content()
    {
        return view('admin.site-content.cotent-page');
    }
     public function showProfile()
     {
        return view('admin.admin-profile.admin-profile');
     }
}
