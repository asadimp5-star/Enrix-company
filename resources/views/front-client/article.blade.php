@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company article' : 'Enrix Company article')

@section('Reso','active')


@section('content')

<article data-dc-tpl="5" class="Sarticle">
<p data-dc-tpl="9" class="secName">Article header</p>
<h1 data-dc-tpl="10" class="SarticleTitle">[Article title, e.g. "How to choose your first target market as an early-stage startup"]</h1>
<div data-dc-tpl="11" style="display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 32px; font-size: 14px; color: rgb(74, 85, 104);">
<div data-dc-tpl="12" style="width: 40px; height: 40px; border-radius: 999px; border: 2px dashed rgb(160, 170, 182); flex: 0 0 40px;">
    <img src="#" alt="auther">
</div>
<span data-dc-tpl="13" class="SarticleTitleAuth">Mahsa · Enrix</span>
<span data-dc-tpl="14"> [Date]</span>
</div>
<div data-dc-tpl="18" class="SarticleTitleImag">[Article image]
    <img src="#" alt="articl image">
</div>
<p data-dc-tpl="19" class="secName">Key takeaways</p>
<div data-dc-tpl="20" class="SarticleKeyw">
<h2 data-dc-tpl="21" class="SarticleKeywTitle">In short</h2>
<div data-dc-tpl="22" class="SarticleKeywDesc">
<p data-dc-tpl="23" class="m-0"><span class="text-danger">✓</span> [Key point 1]</p>
<p data-dc-tpl="24" class="m-0"><span class="text-danger">✓</span> [Key point 2]</p>
<p data-dc-tpl="25" class="m-0"><span class="text-danger">✓</span> [Key point 3]</p>
</div>
</div>
<p data-dc-tpl="26" class="secName">Article text</p>

<p data-dc-tpl="28" class="SarticleDesc">[Heading, e.g. "Why your first market matters"]</p>

<p data-dc-tpl="30" class="SarticleDesc">[Heading, e.g. "Three questions to narrow your focus"]</p>

<div data-dc-tpl="32" class="SarticleDescImg">
    <img src="#" alt="Optional image, diagram or table">
</div>
<br>
<p data-dc-tpl="28" class="SarticleDesc">[Heading, e.g. "Why your first market matters"]</p>
<br>
<div data-dc-tpl="32" class="SarticleDescImg">
    <img src="#" alt="Optional image, diagram or table">
</div>
<br>
<p data-dc-tpl="30" class="SarticleDesc">[Heading, e.g. "Three questions to narrow your focus"]</p>
<br>
<br>
<p data-dc-tpl="36" class="secName">Sources &amp; further reading</p>

<div data-dc-tpl="37" class="SarticleDescSorc">
<p data-dc-tpl="38" class="SarticleDescSorcTitle">Sources &amp; further reading</p>
<p data-dc-tpl="39" style="margin: 0px; color: rgb(74, 85, 104);">
<a data-dc-tpl="40" href="#">[Source or reference]</a> — [For grant explainers and news: always link the official source, e.g. RVO.]</p>
</div>

<p data-dc-tpl="45" class="secName">About the author</p>

<div data-dc-tpl="46" class="SarticleAut">
<div data-dc-tpl="47" class="SarticleAutImg">
    <img src="#" alt="Photo">
</div>
<div data-dc-tpl="48" class="SarticleAutNme">
<p data-dc-tpl="49" class="SarticleAutNmeDesc">
    <span class="text-danger">&#x201C;</span>
    Mahsa
    <span class="text-danger">&#x201E;</span>
</p>
<p data-dc-tpl="50" class="SarticleAutNmeDesc1">Founder of Enrix. Helps early-stage startups find and win Dutch and EU grants. [Adjust]</p>
<a data-dc-tpl="51" href="#" >More about me →</a>
</div>
</div>
</article>


@endsection