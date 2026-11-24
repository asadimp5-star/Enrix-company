@extends('front-client.layout.masterPage')

@section('title-page',__('content.Enrix Company article'))

@section('Reso','active')


@section('content')


<article data-dc-tpl="5" class="Sarticle">
<p data-dc-tpl="9" class="secName">{{ __('content.Article header') }}</p>
<h1 data-dc-tpl="10" class="SarticleTitle">{!! nl2br(e($articls->title)) !!}</h1>
<div data-dc-tpl="11" style="display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 32px; font-size: 14px; color: rgb(74, 85, 104);">
<div data-dc-tpl="12" >
    <img src="{{ asset('storage/postsImg/'. $articls->profImg) }}" alt="{{ $articls->aouther }}" class="SarticleAutImg">
</div>
<span data-dc-tpl="13" class="SarticleTitleAuth">{{ $articls->aouther }}</span>
<span data-dc-tpl="14">{{ $articls->created_at->format('d M Y') }}</span>
</div>
<div data-dc-tpl="18" >
    <img class="SarticleTitleImag" src="{{ asset('storage/postsImg/'. $articls->image1) }}" alt="{{ $articls->title }}">
</div>
<p data-dc-tpl="19" class="secName">{{ __('content.summary') }}</p>
<p data-dc-tpl="30" class="SarticleDesc fw-lighter">{!! nl2br(e($articls->summery)) !!}</p>
<br>
<p data-dc-tpl="19" class="secName">{{ __('content.Key takeaways') }}</p>
<div data-dc-tpl="20" class="SarticleKeyw">
<h2 data-dc-tpl="21" class="SarticleKeywTitle">{{ __('content.In short') }}</h2>
<div data-dc-tpl="22" class="SarticleKeywDesc">
    @foreach ($articls->keywords_list as $keyItem )
    <p data-dc-tpl="23" class="m-0"><span class="text-danger">✓</span>{{ $keyItem }}</p>
    @endforeach
</div>
</div>
<p data-dc-tpl="26" class="secName">{{ __('content.Article text') }}</p>

<p data-dc-tpl="28" class="SarticleDesc">{!! nl2br(e($articls->describe1)) !!}</p>

<p data-dc-tpl="30" class="SarticleDesc">{!! nl2br(e($articls->describe2)) !!}</p>

<div data-dc-tpl="32" >
    <img class="SarticleDescImg" src="{{ asset('storage/postsImg/'. $articls->image2) }}" alt="{{ $articls->title }}">
</div>
<br>
<p data-dc-tpl="28" class="SarticleDesc">{!! nl2br(e($articls->describe3)) !!}</p>
<br>
<div data-dc-tpl="32" >
    <img class="SarticleDescImg" src="{{ asset('storage/postsImg/'. $articls->image3) }}" alt="{{ $articls->title }}">
</div>
<br>
<p data-dc-tpl="30" class="SarticleDesc">{!! nl2br(e($articls->describe4)) !!}</p>
<br>
<br>
<p data-dc-tpl="36" class="secName">{{ __('content.Sources & further reading') }}</p>

<div data-dc-tpl="37" class="SarticleDescSorc">
<p data-dc-tpl="38" class="SarticleDescSorcTitle">{!! nl2br(e($articls->sourceTitle)) !!}</p>
<p data-dc-tpl="39" style="margin: 0px; color: rgb(74, 85, 104);">{!! nl2br(e($articls->sourceDesc)) !!}</p>
</div>

<p data-dc-tpl="45" class="secName">{{ __('content.About the author') }}</p>

<div data-dc-tpl="46" class="SarticleAut">
<div data-dc-tpl="47" >
    <img class="SarticleAutImg" src="{{ asset('storage/postsImg/'. $articls->profImg) }}" alt="{{ $articls->aouther }}">
</div>
<div data-dc-tpl="48" class="SarticleAutNme">
<p data-dc-tpl="49" class="SarticleAutNmeDesc">
    <span class="text-danger">&#x201C;</span>
    {{ $articls->aouther }}
    <span class="text-danger">&#x201E;</span>
</p>
<p data-dc-tpl="50" class="SarticleAutNmeDesc1">{!! nl2br(e($articls->about_aouther)) !!}</p>
</div>
</div>
<a data-dc-tpl="17" href="{{route('resorces') }}" >{{ __('content.Return to Article List') }} →</a>

</article>




@endsection