@extends('front-client.layout.masterPage')

@section('title-page',__('content.Enrix Company resorces'))

@section('Resou','activ')


@section('content')

<section data-dc-tpl="5" class="resorceHero">
<h1 data-dc-tpl="7" class="resorceHeroTitle">{{ __('content.Resources') }}</h1>
<hr class="bg w-25">
<p data-dc-tpl="8" class="resorceHeroDesc">{{ __('content.Clear, practical explanations of startup funding in the Netherlands and the EU.') }}</p>
</section>

<section data-dc-tpl="9" class="resorceFeature">
<p data-dc-tpl="10" class="secName">{{ __('content.Latest article') }}</p>
@foreach ($lastPost as $item)

<div data-dc-tpl="11" class="resorceFeatureDiv">
<div data-dc-tpl="12" class="col-lg-5" >
    <img class="resorceFeatureDivImg" src="{{ asset('storage/postsImg/'.$item->image1) }}" alt="{{ $item->title }}">
</div>
<div data-dc-tpl="13" class="resorceFeatureDivItem">
<p data-dc-tpl="14" class="resorceFeatureDivItemDate">{{ $item->created_at->format('d M Y') }}</p>
<h2 data-dc-tpl="15" class="resorceFeatureDivItemTitle">{{ $item->title}}</h2>
<p data-dc-tpl="16" class="resorceFeatureDivItemSum">{{ substr($item->summery, 0, 150).'...' }}</p>
<a data-dc-tpl="17" href="{{route('article',$item->slug) }}" >{{ __('content.Read article') }} →</a>
</div>
</div>
@endforeach
</section>

<section data-dc-tpl="18" class="resorceList">
<p data-dc-tpl="19" class="secName">{{ __('content.Article list') }}</p>
<div data-dc-tpl="27" class="resorceListArt">
@foreach ($posts as $post)
@if ($post->status ==1)
<div data-dc-tpl="29" class="resorceListArtOne">
<div data-dc-tpl="30" >
    <img class="resorceListArtImg" src="{{ asset('storage/postsImg/'.$post->image1) }}" alt="{{ $post->title }}">
</div>
<div data-dc-tpl="31" class="resorceListArtDiv">
<p data-dc-tpl="32" class="resorceListArtDivDate">{{ $post->created_at->format('d M Y') }}</p>
<h3 data-dc-tpl="33" class="resorceListArtDivTitle">{{ substr($post->title,0,20).'...' }}</h3>
<p data-dc-tpl="34" class="resorceListArtDivSum">{{ substr($post->summery, 0, 30).'...' }}</p>
<a data-dc-tpl="35" href="{{route('article',$post->slug) }}" >{{ __('content.Read article') }} →</a>
</div>
</div>
@endif
@endforeach
</div>
</section>

<section data-dc-tpl="38" class="howCan">
<div data-dc-tpl="39" class="resorceGrant">
<p data-dc-tpl="40" class="secName">{{ __('content.Grant overview guides') }}</p>
<h2 data-dc-tpl="41" class="resorceHeroTitle">

    <span class="text-danger">&#x201C;</span>
    {{ __('content.Grant guides at a glance') }}
    <span class="text-danger">&#x201E;</span>
    
</h2>
<p data-dc-tpl="42" class="resorceGrantDesc">{{ __('content.One short guide per grant: what it is, who it\'s for, and where to find the official information.') }}</p>
<div data-dc-tpl="43" class="resorceGrantDiv">
@foreach ($grantgui as $grantg)
@if ($grantg->status==1)
<div data-dc-tpl="45" class="resorceGrantDivItem">
<span data-dc-tpl="46" class="resorceGrantDivItemTitle">

</span>
<span data-dc-tpl="47" class="resorceGrantDivItemDEsc">
<span class="sc-interp">{{ $grantg->title }}</span>
</span>
<span data-dc-tpl="48" class="resorceGrantDivItemDate">{{ $grantg->desc }}</span>
</div>
@endif
@endforeach
</div>
</div>
</section>

@endsection