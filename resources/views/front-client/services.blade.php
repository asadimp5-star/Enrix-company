@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company services' : 'Enrix Company services')

@section('Servi','activ')


@section('content')

<section data-dc-tpl="5" class="servHero">
<p data-dc-tpl="8" class="secName">Service intro</p>
<h1 data-dc-tpl="9" class="servTitle">Grant writing for early-stage startups</h1>
<p data-dc-tpl="10" class="servDesc">[One or two sentences: what this service does for the startup, in your own words.]</p>
<a data-dc-tpl="11" href="#getTouch" class="introCall">Book an intro call</a>
</section>

<section data-dc-tpl="12" class="servFor">
<div data-dc-tpl="13" class="servForDiv">
<div data-dc-tpl="14" class="servFor1">
<p data-dc-tpl="15" class="secName">Who it's for</p>
<h2 data-dc-tpl="16" class="servForSecTitle">This is for you if…</h2>
<div data-dc-tpl="17" class="servForSecDiv">
<p data-dc-tpl="18" class="m-0">
    <span class="text-danger">✓</span>[Situation 1, e.g. you have an innovative project you want to test]</p>
<p data-dc-tpl="19" class="m-0"><span class="text-danger">✓</span> [Situation 2]</p>
<p data-dc-tpl="20" class="m-0"><span class="text-danger">✓</span> [Situation 3]</p>
</div>
</div>
<div data-dc-tpl="21" class="servFor1">
<p data-dc-tpl="22" class="secName">What's included</p>
<h2 data-dc-tpl="23" class="servForSecTitle">What you get</h2>
<div data-dc-tpl="24" class="servForSecDiv">
<p data-dc-tpl="25" class="m-0"><span class="text-danger">✓</span> A grant fit check across national, regional and EU funding</p>
<p data-dc-tpl="26" class="m-0"><span class="text-danger">✓</span> [Deliverable 2, e.g. application writing]</p>
<p data-dc-tpl="27" class="m-0"><span class="text-danger">✓</span> [Deliverable 3]</p>
</div>
</div>
</div>
</section>

<section data-dc-tpl="28" class="servWork">
<p data-dc-tpl="29" class="secName">How it works</p>
<h2 data-dc-tpl="30" class="workH2">From first call to submission</h2>
<div data-dc-tpl="64" class="workDiv">
<div data-dc-tpl="65" class="workSec">
<p data-dc-tpl="66" class="workStep">Step 1</p>
<h3 data-dc-tpl="67" class="workH3">Get acquainted</h3>
<p data-dc-tpl="68" class="workDescribe">We get to know each other and your startup.</p>
</div>
<div data-dc-tpl="69" class="workSec">
<p data-dc-tpl="70" class="workStep">Step 2</p>
<h3 data-dc-tpl="71" class="workH3">Tailored proposal</h3>
<p data-dc-tpl="72" class="workDescribe">National, regional and EU grants checked against your project.</p>
</div>
<div data-dc-tpl="73" class="workSec">
<p data-dc-tpl="74" class="workStep">Step 3</p>
<h3 data-dc-tpl="75" class="workH3">Writing together</h3>
<p data-dc-tpl="76" class="workDescribe">We build a strong application step by step.</p>
</div>
<div data-dc-tpl="77" class="workSec">
<p data-dc-tpl="78" class="workStep">Step 4</p>
<h3 data-dc-tpl="79" class="workH3">Submit &amp; follow up</h3>
<p data-dc-tpl="80" class="workDescribe">I stay involved after submission.</p>
</div>
</div>
</section>

<section data-dc-tpl="48" class="howCan">
<div data-dc-tpl="49" class="servGrant">
<p data-dc-tpl="50" class="secName">Grants covered</p>
<h2 data-dc-tpl="51" class="servGrantTitle">
    <span class="text-danger">&#x201C;</span>
    Grants I can help with
    <span class="text-danger">&#x201E;</span>
    </h2>
<div data-dc-tpl="52" class="servGrantDiv">
<span data-dc-tpl="53" class="servGrantDivItem">MIT Haalbaarheid</span>
<span data-dc-tpl="54" class="servGrantDivItem">MIT R&amp;D</span>
<span data-dc-tpl="55" class="servGrantDivItem">WBSO</span>
<span data-dc-tpl="56" class="servGrantDivItem">SVOM</span>
<span data-dc-tpl="57" class="servGrantDivItem">EIC</span>
<span data-dc-tpl="58" class="servGrantDivItem">Eurostars</span>
</div>
</div>
</section>

<section data-dc-tpl="60" class="servFaq" id="FAQs">
<p data-dc-tpl="61" class="secName">FAQ</p>
<div data-dc-tpl="62" class="servFaqDiv">
<div data-dc-tpl="63" class="servFaqSec">
<h3 data-dc-tpl="64" class="servFaqQue">[Question about this service]</h3>
<p data-dc-tpl="65" class="servFaqAns">[Your answer]</p>
</div>
<div data-dc-tpl="66" class="servFaqSec">
<h3 data-dc-tpl="67" class="servFaqQue">[Question about this service]</h3>
<p data-dc-tpl="68" class="servFaqAns">[Your answer]</p>
</div>
</div>
</section>

@endsection