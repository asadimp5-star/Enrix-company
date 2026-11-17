@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company for partners' : 'Enrix Bedrijf Voor partners')

@section('partn','activ')


@section('content')

    
    
    <section data-dc-tpl="5" class="partnerHero">
    @foreach ($partns as $partn)
<div data-dc-tpl="6" class="partnerHeroSec">
<p data-dc-tpl="7" class="secName">{{ __('content.Introduction') }}</p>
<h1 data-dc-tpl="8" class="partnerHeroTitle">{!! nl2br(e($partn->title)) !!}</h1>
<hr class="bg">
<p data-dc-tpl="9" class="partnerHeroDesc">{!! nl2br(e($partn->desc)) !!}</p>
<a data-dc-tpl="10" href="#getTouch" class="introCall">{{ __('content.Let\'s talk about a partnership') }}</a>
</div>
<div data-dc-tpl="11" >
    <img class="partnerHeroImg" src="{{ asset('storage/partnerImg/'.$partn->image1 ) }}" alt="photo">
</div>
    @endforeach
    </section>

    <section data-dc-tpl="12" class="enrixPart">
<div data-dc-tpl="13" class="enrixPartDive">
<p data-dc-tpl="14" class="secName">{{ __('content.Why partner with Enrix') }}</p>
<h2 data-dc-tpl="15" class="enrixPartTitle">{{ $checkListBlock->lable }}</h2>
<div data-dc-tpl="16" class="enrixPartSec">
<div data-dc-tpl="17" class="enrixPartItem">
<h3 data-dc-tpl="18" class="enrixPartItemTitle"><span class="text-danger">✓</span>{{ $checkListBlock->items[0] ?? '' }}</h3>
<p data-dc-tpl="19" class="enrixPartItemDesc">{{ $checkListBlock->items[1] ?? '' }}</p>
</div>
<div data-dc-tpl="20" class="enrixPartItem">
<h3 data-dc-tpl="21" class="enrixPartItemTitle"><span class="text-danger">✓</span>{{ $checkListBlock->items[2] ?? '' }}</h3>
<p data-dc-tpl="22" class="enrixPartItemDesc">{{ $checkListBlock->items[3] ?? '' }}</p>
</div>
<div data-dc-tpl="23" class="enrixPartItem">
<h3 data-dc-tpl="24" class="enrixPartItemTitle"><span class="text-danger">✓</span>{{ $checkListBlock->items[4] ?? '' }}</h3>
<p data-dc-tpl="25" class="enrixPartItemDesc">{{ $checkListBlock->items[5] ?? '' }}</p>
</div>
</div>
</div>
    </section>

    <section data-dc-tpl="26" class="together">
<p data-dc-tpl="27" class="secName">{{ __('content.Ways we can work together') }}</p>
<h2 data-dc-tpl="28" class="togetherTitle">{{ $checkList1Block->lable }}</h2>
<p data-dc-tpl="29" class="togetherDesc">{{ $checkList1Block->items[0] ?? '' }}</p>
<div data-dc-tpl="30" class="togetherDiv">
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">{{ $checkList1Block->items[1] ?? '' }}</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">{{ $checkList1Block->items[2] ?? '' }}</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">{{ $checkList1Block->items[3] ?? '' }}</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">{{ $checkList1Block->items[4] ?? '' }}</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">{{ $checkList1Block->items[5] ?? '' }}</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">{{ $checkList1Block->items[6] ?? '' }}</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">{{ $checkList1Block->items[7] ?? '' }}</span></h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">{{ $checkList1Block->items[8] ?? '' }}</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">{{ $checkList1Block->items[9] ?? '' }}</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">{{ $checkList1Block->items[10] ?? '' }}</span>
</p>
</div>
<div data-dc-tpl="32" class="togetherDivItem">
<h3 data-dc-tpl="33" class="togetherDivTitle">
<span class="sc-interp">{{ $checkList1Block->items[11] ?? '' }}</span>
</h3>
<p data-dc-tpl="34" class="togetherDivDesc">
<span class="sc-interp">{{ $checkList1Block->items[12] ?? '' }}</span>
</p>
</div>
</div>
    </section>

    <section data-dc-tpl="35" class="howCan">
<div data-dc-tpl="36" class="partnerWork">
<p data-dc-tpl="37" class="secName">{{ __('content.How a partnership works') }}</p>
<h2 data-dc-tpl="38" class="partnerWorkTitle">{{ $stepBlock->lable }}</h2>
<div data-dc-tpl="64" class="workDiv">
<div data-dc-tpl="65" class="workSec">
<p data-dc-tpl="66" class="workStep">{{ __('content.Step 1') }}</p>
<h3 data-dc-tpl="67" class="workH3">{{ $stepBlock->items[0] ?? '' }}</h3>
<p data-dc-tpl="68" class="workDescribe">{{ $stepBlock->items[1] ?? '' }}</p>
</div>
<div data-dc-tpl="69" class="workSec">
<p data-dc-tpl="70" class="workStep">{{ __('content.Step 2') }}</p>
<h3 data-dc-tpl="71" class="workH3">{{ $stepBlock->items[2] ?? '' }}</h3>
<p data-dc-tpl="72" class="workDescribe">{{ $stepBlock->items[3] ?? '' }}</p>
</div>
<div data-dc-tpl="73" class="workSec">
<p data-dc-tpl="74" class="workStep">{{ __('content.Step 3') }}</p>
<h3 data-dc-tpl="75" class="workH3">{{ $stepBlock->items[4] ?? '' }}</h3>
<p data-dc-tpl="76" class="workDescribe">{{ $stepBlock->items[5] ?? '' }}</p>
</div>
<div data-dc-tpl="77" class="workSec">
<p data-dc-tpl="78" class="workStep">{{ __('content.Step 4') }}</p>
<h3 data-dc-tpl="79" class="workH3">{{ $stepBlock->items[6] ?? '' }}</h3>
<p data-dc-tpl="80" class="workDescribe">{{ $stepBlock->items[7] ?? '' }}</p>
</div>
</div>
</div>
    </section>
    

    
    
    
    <section data-dc-tpl="56" class="partnerTest">
<p data-dc-tpl="57" class="secName">{{ __('content.Partners & testimonial') }}</p>
<h2 data-dc-tpl="58" class="partnerWorkTitle">{{ __('content.Organisations I\'ve worked with') }}</h2>
@foreach ($customrs as $customr)
@if ($customr->status ==1)
<div data-dc-tpl="27" class="resorceListArt">
<div data-dc-tpl="29">
<div data-dc-tpl="30" >
    <img class="resorceListArtImg" src="{{ asset('storage/customerImg/'. $customr->image1) }}" alt="{{ $customr->title }}">
</div>
</div>
<div data-dc-tpl="31" class="resorceListArtDiv">
<h3 data-dc-tpl="33" class="resorceListArtDivTitle">{!! nl2br(e($customr->title)) !!}</h3>
<p data-dc-tpl="34" class="resorceListArtDivSum">{!! nl2br(e($customr->desc)) !!}</p>

</div>
</div>
@endif
@endforeach
    </section>

    
@endsection