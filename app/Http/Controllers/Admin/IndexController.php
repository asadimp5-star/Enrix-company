<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Service;
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
        $services = Service::first();
        $aboutus = About::first();
        $partner = Partner::first();        
        return view('admin.site-content.cotent-page',compact('services','aboutus','partner'));
    }
     public function showProfile()
     {
        return view('admin.admin-profile.admin-profile');
     }
}
