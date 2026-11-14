@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company resorces' : 'Enrix Company resorces')

@section('Resou','activ')


@section('content')

<section data-dc-tpl="5" class="resorceHero">
<p data-dc-tpl="6" class="secName">Page intro</p>
<h1 data-dc-tpl="7" class="resorceHeroTitle">Resources</h1>
<hr class="bg w-25">
<p data-dc-tpl="8" class="resorceHeroDesc">Clear, practical explanations of startup funding in the Netherlands and the EU. [1–2 sentences in your own words.]</p>
</section>

<section data-dc-tpl="9" class="resorceFeature">
<p data-dc-tpl="10" class="secName">Featured article</p>
<div data-dc-tpl="11" class="resorceFeatureDiv">
<div data-dc-tpl="12" class="resorceFeatureDivImg">
    <img src="#" alt="[Article image]">
</div>
<div data-dc-tpl="13" class="resorceFeatureDivItem">
<p data-dc-tpl="14" class="resorceFeatureDivItemDate">[Category] · [Date] · [X] min read</p>
<h2 data-dc-tpl="15" class="resorceFeatureDivItemTitle">[Title of your newest or most important article]</h2>
<p data-dc-tpl="16" class="resorceFeatureDivItemSum">[Two-sentence summary of the article.]</p>
<a data-dc-tpl="17" href="#" >Read article →</a>
</div>
</div>
</section>

<section data-dc-tpl="18" class="resorceList">
<p data-dc-tpl="19" class="secName">Article list</p>
<div data-dc-tpl="20" class="resorceListCat">
<button data-dc-tpl="21" type="button" >All</button>
<button data-dc-tpl="22" type="button" >Dutch grants</button>
<button data-dc-tpl="23" type="button" >EU grants</button>
<button data-dc-tpl="24" type="button">Regional funding</button>
<button data-dc-tpl="25" type="button" >Funding basics</button>
<button data-dc-tpl="26" type="button" >[Your category]</button>
</div>
<div data-dc-tpl="27" class="resorceListArt">
<div data-dc-tpl="29" class="resorceListArtOne">
<div data-dc-tpl="30" class="resorceListArtImg">
    <img src="#" alt="[Image]">
    </div>
<div data-dc-tpl="31" class="resorceListArtDiv">
<p data-dc-tpl="32" class="resorceListArtDivDate"><span class="sc-interp">Dutch grants</span> · [Date]</p>
<h3 data-dc-tpl="33" class="resorceListArtDivTitle">[Article title]</h3>
<p data-dc-tpl="34" class="resorceListArtDivSum">[One-line summary]</p>
<a data-dc-tpl="35" href="#" >Read →</a>
</div>
</div>
</div>
</section>

<section data-dc-tpl="38" class="howCan">
<div data-dc-tpl="39" class="resorceGrant">
<p data-dc-tpl="40" class="secName">Grant overview guides</p>
<h2 data-dc-tpl="41" class="resorceHeroTitle">

    <span class="text-danger">&#x201C;</span>
    Grant guides at a glance
    <span class="text-danger">&#x201E;</span>
    
</h2>
<p data-dc-tpl="42" class="resorceGrantDesc">One short guide per grant: what it is, who it's for, and where to find the official information.</p>
<div data-dc-tpl="43" class="resorceGrantDiv">
<a data-dc-tpl="45" href="#" class="resorceGrantDivItem">
<span data-dc-tpl="46" class="resorceGrantDivItemTitle">
<span class="sc-interp">National</span>
</span>
<span data-dc-tpl="47" class="resorceGrantDivItemDEsc">
    <span class="sc-interp">MIT Haalbaarheid</span>
</span>
<span data-dc-tpl="48" class="resorceGrantDivItemDate">Last checked: [date]</span>
</a>
<a data-dc-tpl="45" href="#" class="resorceGrantDivItem">
<span data-dc-tpl="46" class="resorceGrantDivItemTitle">
<span class="sc-interp">National</span>
</span>
<span data-dc-tpl="47" class="resorceGrantDivItemDEsc">
<span class="sc-interp">MIT R&amp;D</span>
</span>
<span data-dc-tpl="48" class="resorceGrantDivItemDate">Last checked: [date]</span>
</a>
<a data-dc-tpl="45" href="#" class="resorceGrantDivItem">
<span data-dc-tpl="46" class="resorceGrantDivItemTitle">
<span class="sc-interp">National</span>
</span>
<span data-dc-tpl="47" class="resorceGrantDivItemDEsc">
<span class="sc-interp">WBSO</span>
</span>
<span data-dc-tpl="48" class="resorceGrantDivItemDate">Last checked: [date]</span>
</a>
<a data-dc-tpl="45" href="#" class="resorceGrantDivItem">
<span data-dc-tpl="46" class="resorceGrantDivItemTitle">
<span class="sc-interp">National</span>
</span>
<span data-dc-tpl="47" class="resorceGrantDivItemDEsc">
<span class="sc-interp">SVOM</span>
</span>
<span data-dc-tpl="48" class="resorceGrantDivItemDate">Last checked: [date]</span>
</a>
<a data-dc-tpl="45" href="#" class="resorceGrantDivItem">
<span data-dc-tpl="46" class="resorceGrantDivItemTitle">
<span class="sc-interp">European</span>
</span>
<span data-dc-tpl="47" class="resorceGrantDivItemDEsc">
<span class="sc-interp">EIC</span>
</span>
<span data-dc-tpl="48" class="resorceGrantDivItemDate">Last checked: [date]</span>
</a>
<a data-dc-tpl="45" href="#" class="resorceGrantDivItem">
<span data-dc-tpl="46" class="resorceGrantDivItemTitle">
<span class="sc-interp">European</span>
</span>
<span data-dc-tpl="47" class="resorceGrantDivItemDEsc">
<span class="sc-interp">Eurostars</span>
</span>
<span data-dc-tpl="48" class="resorceGrantDivItemDate">Last checked: [date]</span>
</a>
</div>
</div>
</section>

@endsection