<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Customer;
use App\Models\Faq;
use App\Models\Home;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Service;
use App\Models\Storie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($local)
    {
        $home = Home::all();
        return view('front-client.home',compact('home'));

    }

    public function services($local)
    {
        $service = Service::all();
        $faqs = Faq::orderByDesc('id')->paginate(7);
        return view('front-client.services',compact('service','faqs'));
    }

    public function partners($local)
    {
        $partns = Partner::all();
        $customrs = Customer::orderByDesc('id')->paginate(4);
        return view('front-client.forPartners',compact('partns','customrs'));
    }

    public function about($local)
    {
        $abouts = About::all();
        $story =Storie::orderByDesc('id')->paginate(7);
        return view('front-client.about',compact('abouts','story'));
    }

    public function resorces($local)
    {
        $posts = Post::orderByDesc('id')->paginate(8);
        $lastPost = Post::latest('id')->get();
        return view('front-client.resorces',compact('posts','lastPost'));
    }

    public function contact($local)
    {
        return view('front-client.cotnact');
    }

    public function article($local,$slug)
    {
        $articls = Post::where('slug',$slug)->firstOrFail();
        return view('front-client.article',compact('articls'));
    }
}
