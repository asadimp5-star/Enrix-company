<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($local)
    {
        return view('front-client.home');

    }

    public function services($local)
    {
        return view('front-client.services');
    }

    public function partners($local)
    {
        return view('front-client.forPartners');
    }

    public function about($local)
    {
        return view('front-client.about');
    }

    public function resorces($local)
    {
        return view('front-client.resorces');
    }

    public function contact($local)
    {
        return view('front-client.cotnact');
    }

    public function article($local)
    {
        return view('front-client.article');
    }
}
