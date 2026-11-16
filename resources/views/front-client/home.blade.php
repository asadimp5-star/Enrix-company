@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company Home' : 'Enrix Bedrijf thuis')

@section('HOM','activ')


@section('content')



<section data-dc-tpl="18" class="hero ">
@foreach ($home as $item)   
<div data-dc-tpl="19" class="heroDiv">
<h1 data-dc-tpl="21" class="heroH1">{!! nl2br(e($item->title)) !!}</h1>
<hr class="bg">
<p data-dc-tpl="22" class="heroP">{!! nl2br(e($item->desc)) !!}</p>
<div data-dc-tpl="23" class="heroDiv1">
<a data-dc-tpl="24" href="#getTouch" class="introCall">{{ __('content.Book an intro call') }}</a>
<a data-dc-tpl="25" href="{{ route('services') }}" class="heroA1">{{ __('content.See services') }}</a>
</div>
</div>
<div data-dc-tpl="26" >
 <img class="heroImg" src="{{ asset('storage/firstImg/'.$item->image1) }}" alt="{{$item->title}}">
</div>
@endforeach
</section>


<section data-dc-tpl="48" class="howCan">
<div data-dc-tpl="49" class="howCanDiv">
<p data-dc-tpl="50" class="secName">{{ __('content.Services') }}</p>
<h2 data-dc-tpl="51" class="howCanH2">
    <span class="text-danger">&#x201C;</span>
    How I can help
    <span class="text-danger">&#x201E;</span>
    
</h2>
<div data-dc-tpl="52" class="howCanDiv1">
<div data-dc-tpl="53" class="howCanSec">
<h3 data-dc-tpl="54" class="howCanH3">Grant writing</h3>
<p data-dc-tpl="55" class="howCanP">Finding the right Dutch and EU grants and writing strong applications — MIT Haalbaarheid, MIT R&amp;D, WBSO, SVOM, EIC, Eurostars and more.</p>

</div>
<div data-dc-tpl="57" class="howCanSec">
<h3 data-dc-tpl="58" class="howCanH3">Strategic advisory</h3>
<p data-dc-tpl="59" class="howCanP">Go-to-market strategy and practical guidance to help your startup take its next step.</p>

</div>
</div>
</div>
</section>



<section data-dc-tpl="36" class="help">
<p data-dc-tpl="37" class="secName">{{ __('content.Who I help') }}</p>
<h2 data-dc-tpl="38" class="helpH2">Two kinds of people I work with</h2>
<div data-dc-tpl="39" class="helpDiv">
<div data-dc-tpl="40" class="helpDiv1">
<h3 data-dc-tpl="41" class="helpH3">Early-stage startups</h3>
<p data-dc-tpl="42" class="helpP1">You have an innovative idea and need funding to test or build it. I find the grants that fit and write the application with you.</p>

</div>
<div data-dc-tpl="44" class="helpDiv1">
    <h3 data-dc-tpl="45" class="helpH3">Accelerators &amp; startup hubs</h3>
<p data-dc-tpl="46" class="helpP1">You support startups and want to give your cohort practical funding knowledge. Let's explore how we can work together.</p>

</div>
</div>
</section>



<section data-dc-tpl="61" class="work mb-2">
<p data-dc-tpl="62" class="secName">{{ __('content.How I work') }}</p>
<h2 data-dc-tpl="63" class="workH2">A clear, personal process</h2>
<div data-dc-tpl="64" class="workDiv">
<div data-dc-tpl="65" class="workSec">
<p data-dc-tpl="66" class="workStep">{{ __('content.Step 1') }}</p>
<h3 data-dc-tpl="67" class="workH3">Intro call</h3>
<p data-dc-tpl="68" class="workDescribe">We get to know each other and your startup.</p>
</div>
<div data-dc-tpl="69" class="workSec">
<p data-dc-tpl="70" class="workStep">{{ __('content.Step 2') }}</p>
<h3 data-dc-tpl="71" class="workH3">Grant fit check</h3>
<p data-dc-tpl="72" class="workDescribe">National, regional and EU grants checked against your project.</p>
</div>
<div data-dc-tpl="73" class="workSec">
<p data-dc-tpl="74" class="workStep">{{ __('content.Step 3') }}</p>
<h3 data-dc-tpl="75" class="workH3">Writing together</h3>
<p data-dc-tpl="76" class="workDescribe">We build a strong application step by step.</p>
</div>
<div data-dc-tpl="77" class="workSec">
<p data-dc-tpl="78" class="workStep">{{ __('content.Step 4') }}</p>
<h3 data-dc-tpl="79" class="workH3">Submit &amp; follow up</h3>
<p data-dc-tpl="80" class="workDescribe">I stay involved after submission.</p>
</div>
</div>
</section>


@endsection

    
    
    

    
