@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company about' : 'Enrix Bedrijf Over')

@section('Abou','activ')


@section('content')


<section data-dc-tpl="5" class="aboutHero">
@foreach ($abouts as $about)
<div data-dc-tpl="6" >
    <img class="aboutHeroImg" src="{{ asset('storage/aboutImg/'.$about->image1) }}" alt="{{ $about->title }}">
 </div>
<div data-dc-tpl="7" class="aboutHeroDiv">
<p data-dc-tpl="8" class="secName">{{ __('content.Introduction') }}</p>
<h1 data-dc-tpl="9" class="aboutHeroTitle">{!! nl2br(e($about->title)) !!}</h1>
<hr class="bg">
<p data-dc-tpl="10" class="aboutHeroDesc">{!! nl2br(e($about->title)) !!}</p>
<a data-dc-tpl="11" href="#getTouch" class="introCall">{{ __('content.Book a free intro call') }}</a>
</div>
@endforeach
</section>

<section data-dc-tpl="12" class="aboutStory">
    <div data-dc-tpl="13" class="aboutStoryDiv">
<p data-dc-tpl="14" class="secName">{{ __('content.My story') }}</p>
<h2 data-dc-tpl="15" class="aboutStoryDivTitle">{{ $checkListBlock->lable }}</h2>
<p data-dc-tpl="16" class="aboutStoryDivItem"><span class="text-danger">✓</span>{{ $checkListBlock->items[0] ?? '' }}</p>
<p data-dc-tpl="17" class="aboutStoryDivItem"><span class="text-danger">✓</span>{{ $checkListBlock->items[1] ?? '' }}</p>
<p data-dc-tpl="18" class="aboutStoryDivItem"><span class="text-danger">✓</span>{{ $checkListBlock->items[2] ?? '' }}</p>
<p data-dc-tpl="18" class="aboutStoryDivItem"><span class="text-danger">✓</span>{{ $checkListBlock->items[3] ?? '' }}</p>
</div>
</section>

<section data-dc-tpl="19" class="aboutApproach">
<p data-dc-tpl="20" class="secName">{{ __('content.My approach') }}</p>
<h2 data-dc-tpl="21" class="aboutStoryDivTitle">{{ $checkList1Block->lable }}</h2>
<div data-dc-tpl="22" style="display: flex; flex-wrap: wrap; gap: 24px;"><div data-dc-tpl="23" class="aboutApproachDiv">
<h3 data-dc-tpl="24" class="aboutApproachDivTitle">{{ $checkList1Block->items[0] ?? '' }}</h3>
<p data-dc-tpl="25" class="aboutApproachDivDesc">{{ $checkList1Block->items[1] ?? '' }}</p>
</div>
<div data-dc-tpl="26" class="aboutApproachDiv">
<h3 data-dc-tpl="27" class="aboutApproachDivTitle">{{ $checkList1Block->items[2] ?? '' }}</h3>
<p data-dc-tpl="28" class="aboutApproachDivDesc">{{ $checkList1Block->items[3] ?? '' }}</p>
</div>
<div data-dc-tpl="29" class="aboutApproachDiv">
<h3 data-dc-tpl="30" class="aboutApproachDivTitle">{{ $checkList1Block->items[4] ?? '' }}</h3>
<p data-dc-tpl="31" class="aboutApproachDivDesc">{{ $checkList1Block->items[5] ?? '' }}</p>
</div>
</div>
</section>

<section data-dc-tpl="32" class="howCan">
<div data-dc-tpl="33" class="aboutCreadit">
<p data-dc-tpl="34" class="secName">{{ __('content.Credentials & results') }}</p>
<h2 data-dc-tpl="35" class="aboutStoryDivTitle">{{ $stepBlock->lable }}</h2>
<div data-dc-tpl="36" class="aboutCreaditDiv">
<div data-dc-tpl="37" class="aboutCreaditDivItem">
<h3 data-dc-tpl="38" class="aboutCreaditDivTitle">{{ $stepBlock->items[0] ?? '' }}</h3>
<p data-dc-tpl="39" class="aboutCreaditDivDesc">{{ $stepBlock->items[1] ?? '' }}</p>
<p data-dc-tpl="40" class="aboutCreaditDivDesc">{{ $stepBlock->items[2] ?? '' }}</p>
</div>
<div data-dc-tpl="41" class="aboutCreaditDivItem">
<h3 data-dc-tpl="42" class="aboutCreaditDivTitle">{{ $stepBlock->items[3] ?? '' }}</h3>
<p data-dc-tpl="43" class="aboutCreaditDivDesc">{{ $stepBlock->items[4] ?? '' }}</p>
<p data-dc-tpl="44" class="aboutCreaditDivDesc">{{ $stepBlock->items[5] ?? '' }}</p>
</div>
<div data-dc-tpl="45" class="aboutCreaditDivItem">
<h3 data-dc-tpl="46" class="aboutCreaditDivTitle">{{ $stepBlock->items[6] ?? '' }}</h3>
<p data-dc-tpl="44" class="aboutCreaditDivDesc">{{ $stepBlock->items[7] ?? '' }}</p>
<p data-dc-tpl="47" class="aboutCreaditDivDesc">{{ $stepBlock->items[8] ?? '' }}</p>
</div>
</div>
</div>
</section>





<section data-dc-tpl="48" class="aboutCase">
<p data-dc-tpl="49" class="secName">{{ __('content.Case stories') }}</p>
<h2 data-dc-tpl="50" class="aboutStoryDivTitle">{{ __('content.Startups I\'ve helped') }}</h2>
<div data-dc-tpl="52" class="aboutCaseDive">
@foreach ($story as $stor)
@if ($stor->status ==1)
<div data-dc-tpl="53" class="aboutCaseDiveItem">
<h3 data-dc-tpl="55" class="aboutCaseDiveItemTitle1">{!! nl2br(e($stor->title)) !!}</h3>
<p data-dc-tpl="56" class="aboutApproachDivDesc">{!! nl2br(e($stor->desc)) !!}</p>
</div>
@endif 
@endforeach
</div>
<div class="col-3 pe-5">{{ $story->links() }}</div>
</section>




@endsection