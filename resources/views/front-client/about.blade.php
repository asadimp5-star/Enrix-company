@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company about' : 'Enrix Company about')

@section('abo','active')


@section('content')

<section data-dc-tpl="5" class="aboutHero">
<div data-dc-tpl="6" class="aboutHeroImg"><img src="#" alt="Warm, professional photo of Mahsa"> </div>
<div data-dc-tpl="7" class="aboutHeroDiv">
<p data-dc-tpl="8" class="secName">Introduction</p>
<h1 data-dc-tpl="9" class="aboutHeroTitle">Hi, I'm Mahsa</h1>
<hr class="bg">
<p data-dc-tpl="10" class="aboutHeroDesc">Founder of Enrix. I help early-stage startups find and win the grants that fit their plans. [Adjust to your own words.]</p>
<a data-dc-tpl="11" href="#" class="introCall">Book a free intro call</a>
</div>
</section>

<section data-dc-tpl="12" class="aboutStory">
    <div data-dc-tpl="13" class="aboutStoryDiv">
<p data-dc-tpl="14" class="secName">My story</p>
<h2 data-dc-tpl="15" class="aboutStoryDivTitle">Why I started Enrix</h2>
<p data-dc-tpl="16" class="aboutStoryDivItem"><span class="text-danger">✓</span>[Paragraph 1: your background and how you came to work with startups and grants.]</p>
<p data-dc-tpl="17" class="aboutStoryDivItem"><span class="text-danger">✓</span>[Paragraph 2: what you noticed startups struggle with when it comes to funding.]</p>
<p data-dc-tpl="18" class="aboutStoryDivItem"><span class="text-danger">✓</span>[Paragraph 3: why you founded Enrix in 2026 and what you want to achieve for your clients.]</p>
</div>
</section>

<section data-dc-tpl="19" class="aboutApproach">
<p data-dc-tpl="20" class="secName">My approach</p>
<h2 data-dc-tpl="21" class="aboutStoryDivTitle">How I work with startups</h2>
<div data-dc-tpl="22" style="display: flex; flex-wrap: wrap; gap: 24px;"><div data-dc-tpl="23" class="aboutApproachDiv">
<h3 data-dc-tpl="24" class="aboutApproachDivTitle">Relationship first</h3>
<p data-dc-tpl="25" class="aboutApproachDivDesc">I take time to understand your startup before suggesting any grant. [Adjust]</p>
</div>
<div data-dc-tpl="26" class="aboutApproachDiv">
<h3 data-dc-tpl="27" class="aboutApproachDivTitle">Honest advice</h3>
<p data-dc-tpl="28" class="aboutApproachDivDesc">If a grant isn't a good fit, I'll tell you clearly, so you don't waste time. [Adjust]</p>
</div>
<div data-dc-tpl="29" class="aboutApproachDiv">
<h3 data-dc-tpl="30" class="aboutApproachDivTitle">Thorough search</h3>
<p data-dc-tpl="31" class="aboutApproachDivDesc">I check national, regional and EU funding for every project. [Adjust]</p>
</div>
</div>
</section>

<section data-dc-tpl="32" class="howCan">
<div data-dc-tpl="33" class="aboutCreadit">
<p data-dc-tpl="34" class="secName">Credentials &amp; results</p>
<h2 data-dc-tpl="35" class="aboutStoryDivTitle">Background</h2>
<div data-dc-tpl="36" class="aboutCreaditDiv">
<div data-dc-tpl="37" class="aboutCreaditDivItem">
<h3 data-dc-tpl="38" class="aboutCreaditDivTitle">Education</h3>
<p data-dc-tpl="39" class="aboutCreaditDivDesc">MSc Entrepreneurship — University of Tehran</p>
<p data-dc-tpl="40" class="aboutCreaditDivDesc">MSc International Management — Vrije Universiteit Amsterdam</p>
</div>
<div data-dc-tpl="41" class="aboutCreaditDivItem">
<h3 data-dc-tpl="42" class="aboutCreaditDivTitle">Successful applications</h3>
<p data-dc-tpl="43" class="aboutCreaditDivDesc">MIT Haalbaarheid</p>
<p data-dc-tpl="44" class="aboutCreaditDivDesc">SVOM</p>
</div>
<div data-dc-tpl="45" class="aboutCreaditDivItem">
<h3 data-dc-tpl="46" class="aboutCreaditDivTitle">In the startup ecosystem</h3>
<p data-dc-tpl="47" class="aboutCreaditDivDesc">[Communities, networks or events you're active in]</p>
</div>
</div>
</div>
</section>

<section data-dc-tpl="48" class="aboutCase">
<p data-dc-tpl="49" class="secName">Case stories</p>
<h2 data-dc-tpl="50" class="aboutStoryDivTitle">Startups I've helped</h2>
<p data-dc-tpl="51" class="aboutCaseP">Shared with each client's permission.</p>
<div data-dc-tpl="52" class="aboutCaseDive">
<div data-dc-tpl="53" class="aboutCaseDiveItem">
<p data-dc-tpl="54" class="aboutCaseDiveItemTitle">MIT Haalbaarheid</p>
<h3 data-dc-tpl="55" class="aboutCaseDiveItemTitle1">[Client name or "an early-stage startup in X"]</h3>
<p data-dc-tpl="56" class="aboutApproachDivDesc">
<strong data-dc-tpl="57" style="color: rgb(19, 35, 58);">Challenge:</strong> [one sentence]</p>
<p data-dc-tpl="58" class="aboutApproachDivDesc">
<strong data-dc-tpl="59" style="color: rgb(19, 35, 58);">What we did:</strong> [one sentence]</p>
<p data-dc-tpl="60" class="aboutApproachDivDesc">
<strong data-dc-tpl="61" style="color: rgb(19, 35, 58);">Result:</strong> [one sentence]</p>
<p data-dc-tpl="62" class="aboutApproachDivp2">"[Short client quote]"</p>
</div>
<div data-dc-tpl="63" class="aboutCaseDiveItem">
<p data-dc-tpl="64" class="aboutCaseDiveItemTitle">SVOM</p>
<h3 data-dc-tpl="65" class="aboutCaseDiveItemTitle1">[Client name or "an early-stage startup in X"]</h3>
<p data-dc-tpl="66" class="aboutApproachDivDesc">
<strong data-dc-tpl="67" style="color: rgb(19, 35, 58);">Challenge:</strong> [one sentence]</p>
<p data-dc-tpl="68" class="aboutApproachDivDesc">
<strong data-dc-tpl="69" style="color: rgb(19, 35, 58);">What we did:</strong> [one sentence]</p>
<p data-dc-tpl="70" class="aboutApproachDivDesc">
<strong data-dc-tpl="71" style="color: rgb(19, 35, 58);">Result:</strong> [one sentence]</p>
<p data-dc-tpl="72" class="aboutApproachDivp2">"[Short client quote]"</p>
</div>
</div>
</section>



@endsection