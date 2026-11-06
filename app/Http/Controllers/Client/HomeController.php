<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front-client.home');

    }

    public function services()
    {
        return view('front-client.services');
    }

    public function partners()
    {
        return view('front-client.forPartners');
    }

    public function about()
    {
        return view('front-client.about');
    }

    public function resorces()
    {
        return view('front-client.resorces');
    }

    public function contact()
    {
        return view('front-client.cotnact');
    }

    public function article()
    {
        return view('front-client.article');
    }
}
