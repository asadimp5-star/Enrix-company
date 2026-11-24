<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutBlock;
use App\Models\Customer;
use App\Models\Faq;
use App\Models\Grant;
use App\Models\Home;
use App\Models\HomeBlock;
use App\Models\Partner;
use App\Models\PartnerBlock;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceBlock;
use App\Models\Storie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($local)
    {
        $home = Home::all();
        $blocks =HomeBlock::with('translations')->whereIn('type',['checkList','checkList1','step'])->get();
        $checkListBlock = $blocks->firstWhere('type' , 'checkList');
        $checkList1Block = $blocks->firstWhere('type' , 'checkList1');
        $stepBlock = $blocks->firstWhere('type' , 'step');
        $hero = $home->first();
        $seo = $this->makeSeo(
            $hero->title ?? 'HOME',
            $hero->desc ?? '',
            route('home',['local' => $local]),
            $hero->title ?? '',
            $hero?->image1 ? asset('storage/firstImg/'.$hero->image1) : null
        );
        return view('front-client.home',compact('home','checkListBlock','checkList1Block','stepBlock','seo'));

    }

    public function services($local)
    {
        $service = Service::all();
        $faqs = Faq::orderByDesc('id')->paginate(7);
        $blocks =ServiceBlock::with('translations')->whereIn('type',['checkList','checkList1','step','pill'])->get();
        $checkListBlock = $blocks->firstWhere('type' , 'checkList');
        $checkList1Block = $blocks->firstWhere('type' , 'checkList1');
        $stepBlock = $blocks->firstWhere('type' , 'step');
        $pillBlock = $blocks->firstWhere('type' , 'pill');

        $hero = $service->first();
        $seo = $this->makeSeo(
            $hero->title ?? 'service',
            $hero->desc ?? '',
            route('services',['local' => $local]),
            $hero->title ?? '',
            $hero?->image1 ? asset('storage/firstImg/'.$hero->image1) : null
        );
        return view('front-client.services',compact('service','faqs','checkListBlock','checkList1Block','stepBlock','pillBlock','seo'));
    }

    public function partners($local)
    {
        $partns = Partner::all();
        $customrs = Customer::orderByDesc('id')->paginate(4);
        $blocks =PartnerBlock::with('translations')->whereIn('type',['checkList','checkList1','step'])->get();
        $checkListBlock = $blocks->firstWhere('type' , 'checkList');
        $checkList1Block = $blocks->firstWhere('type' , 'checkList1');
        $stepBlock = $blocks->firstWhere('type' , 'step');

        $hero = $partns->first();
        $seo = $this->makeSeo(
            $hero->title ?? 'partns',
            $hero->desc ?? '',
            route('partners',['local' => $local]),
            $hero->title ?? '',
            $hero?->image1 ? asset('storage/partnerImg/'.$hero->image1) : null
        );
        return view('front-client.forPartners',compact('partns','customrs','checkListBlock','checkList1Block','stepBlock','seo'));
    }

    public function about($local)
    {
        $abouts = About::all();
        $story =Storie::orderByDesc('id')->paginate(7);
        $blocks =AboutBlock::with('translations')->whereIn('type',['checkList','checkList1','step'])->get();
        $checkListBlock = $blocks->firstWhere('type' , 'checkList');
        $checkList1Block = $blocks->firstWhere('type' , 'checkList1');
        $stepBlock = $blocks->firstWhere('type' , 'step');

        $hero = $abouts->first();
        $seo = $this->makeSeo(
            $hero->title ?? 'abouts',
            $hero->desc ?? '',
            route('about',['local' => $local]),
            $hero->title ?? '',
            $hero?->image1 ? asset('storage/aboutImg/'.$hero->image1) : null
        );
        return view('front-client.about',compact('abouts','story','checkListBlock','checkList1Block','stepBlock','seo'));
    }

    public function resorces($local)
    {
        $posts = Post::orderByDesc('id')->paginate(8);
        $lastPost = Post::latest('id')->get();
        $grantgui = Grant::all();

        $hero = $posts->first();
        $seo = $this->makeSeo(
            $hero->title ?? 'posts',
            $hero->desc ?? '',
            route('resorces',['local' => $local]),
            $hero->title ?? '',
            $hero?->image1 ? asset('storage/postsImg/'.$hero->image1) : null
        );
        return view('front-client.resorces',compact('posts','lastPost','grantgui','seo'));
    }

    public function contact($local)
    {
        return view('front-client.cotnact');
    }

    public function article($local,$slug)
    {
        $articls = Post::where('slug',$slug)->firstOrFail();

        $hero = $articls->first();
        $seo = $this->makeSeo(
            $hero->title ?? 'articls',
            $hero->summery ?? '',
            route('article',['local' => $local , 'slug' =>$articls->slug]),
            is_array($hero->keywords_list) ? implode(',', $hero->keywords_list ) : '',
            $hero?->image1 ? asset('storage/postsImg/'.$hero->image1) : null
        );
        return view('front-client.article',compact('articls','seo'));
    }
}
