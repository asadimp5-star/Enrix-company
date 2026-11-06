@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company for partners' : 'Enrix Company for partners')

@section('partn','active')


@section('content')

    <section data-dc-tpl="5" class="partnerHero">
<div data-dc-tpl="6" class="partnerHeroSec">
<p data-dc-tpl="7" class="secName">Introduction</p>
<h1 data-dc-tpl="8" class="partnerHeroTitle">For accelerators and startup hubs</h1>
<hr class="bg">
<p data-dc-tpl="9" class="partnerHeroDesc">Give your startups practical, up-to-date knowledge about Dutch and EU grants, and a trusted expert to turn to. [Adjust to your own words.]</p>
<a data-dc-tpl="10" href="#" class="introCall">Let's talk about a partnership</a>
</div>
<div data-dc-tpl="11" class="partnerHeroImg">
    <img src="#" alt="photo">
</div>
    </section>

    <section data-dc-tpl="12" class="enrixPart">
<div data-dc-tpl="13" class="enrixPartDive">
<p data-dc-tpl="14" class="secName">Why partner with Enrix</p>
<h2 data-dc-tpl="15" class="enrixPartTitle">What your programme gains</h2>
<div data-dc-tpl="16" class="enrixPartSec">
<div data-dc-tpl="17" class="enrixPartItem">
<h3 data-dc-tpl="18" class="enrixPartItemTitle"><span class="text-danger">✓</span>Funding expertise for your cohort</h3>
<p data-dc-tpl="19" class="enrixPartItemDesc">[One sentence]</p>
</div>
<div data-dc-tpl="20" class="enrixPartItem">
<h3 data-dc-tpl="21" class="enrixPartItemTitle"><span class="text-danger">✓</span>Better-prepared startups</h3>
<p data-dc-tpl="22" class="enrixPartItemDesc">[One sentence]</p>
</div>
<div data-dc-tpl="23" class="enrixPartItem">
<h3 data-dc-tpl="24" class="enrixPartItemTitle"><span class="text-danger">✓</span>A long-term, personal partner</h3>
<p data-dc-tpl="25" class="enrixPartItemDesc">[One sentence]</p>
</div>
</div>
</div>
    </section>

    <section data-dc-tpl="26" class="together">
<p data-dc-tpl="27" class="secName">Ways we can work together</p>
<h2 data-dc-tpl="28" class="togetherTitle">Partnership formats</h2>
<p data-dc-tpl="29" class="togetherDesc">[Keep the 2–3 formats you choose to offer; remove the rest.]</p>
<div data-dc-tpl="30" class="togetherDiv">
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">Grant workshops for cohorts</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">A session on the Dutch and EU grant landscape, tailored to your startups.</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">Funding office hours</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">Regular slots where your startups bring their funding questions.</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">Grant readiness scans</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">A quick check of whether a startup is ready to apply, and what to fix first.</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">Referral partnership</span></h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">You refer startups who need grant support; I keep you informed.</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">Speaking &amp; panels</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">Talks on startup funding at your events or demo days.</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">Joint webinars &amp; guides</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">Co-created content on funding for your community.</span>
</p>
</div>
</div>
    </section>

    <section data-dc-tpl="35" class="howCan">
<div data-dc-tpl="36" class="partnerWork">
<p data-dc-tpl="37" class="secName">How a partnership works</p>
<h2 data-dc-tpl="38" class="partnerWorkTitle">Simple to start</h2>
<div data-dc-tpl="64" class="workDiv">
<div data-dc-tpl="65" class="workSec">
<p data-dc-tpl="66" class="workStep">Step 1</p>
<h3 data-dc-tpl="67" class="workH3">Intro call</h3>
<p data-dc-tpl="68" class="workDescribe">We get to know each other and your startup.</p>
</div>
<div data-dc-tpl="69" class="workSec">
<p data-dc-tpl="70" class="workStep">Step 2</p>
<h3 data-dc-tpl="71" class="workH3">Grant fit check</h3>
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
</div>
    </section>

    <section data-dc-tpl="56" class="partnerTest">
<p data-dc-tpl="57" class="secName">Partners &amp; testimonial</p>
<h2 data-dc-tpl="58" class="partnerWorkTitle">Organisations I've worked with</h2>
<div data-dc-tpl="59" class="partnerTestDiv">
<div data-dc-tpl="60" class="partnerTestDivItem">[Partner logo]</div>
<div data-dc-tpl="61" class="partnerTestDivItem">[Partner logo]</div>
<div data-dc-tpl="62" class="partnerTestDivItem">[Partner logo]</div>
</div>
<div data-dc-tpl="63" class="partnerTestDiv1">
<p data-dc-tpl="64" class="partnerTestDiv1P">"[Short quote from a programme manager about working with you]"</p>
<p data-dc-tpl="65" class="partnerTestDiv1P1">[Name], [role] at [organisation] — only with permission</p>
</div>
    </section>

@endsection