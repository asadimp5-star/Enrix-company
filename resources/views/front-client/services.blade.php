@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company services' : 'Enrix Bedrijf Diensten')

@section('Servi','activ')


@section('content')


<section data-dc-tpl="5" class="servHero">
@foreach ($service as $item)
<p data-dc-tpl="8" class="secName">{{ __('content.Service intro') }}</p>
<h1 data-dc-tpl="9" class="servTitle">{!! nl2br(e($item->title)) !!}</h1>
<p data-dc-tpl="10" class="servDesc">{!! nl2br(e($item->desc)) !!}</p>
<a data-dc-tpl="11" href="#getTouch" class="introCall">{{ __('content.Book an intro call') }}</a>
@endforeach
</section>

<section data-dc-tpl="12" class="servFor">
<div data-dc-tpl="13" class="servForDiv">
<div data-dc-tpl="14" class="servFor1">
<p data-dc-tpl="15" class="secName">{{ __('content.Who it\'s for') }}</p>
<h2 data-dc-tpl="16" class="servForSecTitle">{{ $checkListBlock->lable }}</h2>
<div data-dc-tpl="17" class="servForSecDiv">
<p data-dc-tpl="18" class="m-0"><span class="text-danger">✓</span>{{ $checkListBlock->items[0] ?? '' }}</p>
<p data-dc-tpl="19" class="m-0"><span class="text-danger">✓</span> {{ $checkListBlock->items[1] ?? '' }}</p>
@if (isset($checkListBlock->items[2]))<p data-dc-tpl="20" class="m-0"><span class="text-danger">✓</span> {{ $checkListBlock->items[2]}}</p>@endif
@if (isset($checkListBlock->items[3]))<p data-dc-tpl="20" class="m-0"><span class="text-danger">✓</span> {{ $checkListBlock->items[3]}}</p>@endif
</div>
</div>
<div data-dc-tpl="21" class="servFor1">
<p data-dc-tpl="22" class="secName">{{ __('content.What\'s included') }}</p>
<h2 data-dc-tpl="23" class="servForSecTitle">{{ $checkList1Block->lable }}</h2>
<div data-dc-tpl="24" class="servForSecDiv">
<p data-dc-tpl="25" class="m-0"><span class="text-danger">✓</span>{{ $checkList1Block->items[0] ?? '' }}</p>
<p data-dc-tpl="26" class="m-0"><span class="text-danger">✓</span>{{ $checkList1Block->items[1] ?? '' }}</p>
@if (isset($checkList1Block->items[2]))<p data-dc-tpl="20" class="m-0"><span class="text-danger">✓</span> {{ $checkList1Block->items[2]}}</p>@endif
@if (isset($checkList1Block->items[3]))<p data-dc-tpl="20" class="m-0"><span class="text-danger">✓</span> {{ $checkList1Block->items[3]}}</p>@endif
</div>
</div>
</div>
</section>

<section data-dc-tpl="28" class="servWork">
<p data-dc-tpl="29" class="secName">{{ __('content.How I work') }}</p>
<h2 data-dc-tpl="30" class="workH2">{{ $stepBlock->lable }}</h2>
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
</section>

<section data-dc-tpl="48" class="howCan">
<div data-dc-tpl="49" class="servGrant">
<p data-dc-tpl="50" class="secName">{{ __('content.Grants covered') }}</p>
<h2 data-dc-tpl="51" class="servGrantTitle">
    <span class="text-danger">&#x201C;</span>
    {{ $pillBlock->lable }}
    <span class="text-danger">&#x201E;</span>
    </h2>
<div data-dc-tpl="52" class="servGrantDiv">
    @if(isset($pillBlock->items[0]))
        <span data-dc-tpl="53" class="servGrantDivItem">{{ $pillBlock->items[0]}}</span>
    @endif
    @if(isset($pillBlock->items[1]))
        <span data-dc-tpl="53" class="servGrantDivItem">{{ $pillBlock->items[1]}}</span>
    @endif
    @if(isset($pillBlock->items[2]))
        <span data-dc-tpl="53" class="servGrantDivItem">{{ $pillBlock->items[2]}}</span>
    @endif
    @if(isset($pillBlock->items[3]))
    <span data-dc-tpl="53" class="servGrantDivItem">{{ $pillBlock->items[3]}}</span>
    @endif
    @if(isset($pillBlock->items[4]))
    <span data-dc-tpl="53" class="servGrantDivItem">{{ $pillBlock->items[4]}}</span>
    @endif
    @if(isset($pillBlock->items[5]))
    <span data-dc-tpl="53" class="servGrantDivItem">{{ $pillBlock->items[5]}}</span>
    @endif
    @if(isset($pillBlock->items[6]))
    <span data-dc-tpl="53" class="servGrantDivItem">{{ $pillBlock->items[6]}}</span>
    @endif
    @if(isset($pillBlock->items[7]))
    <span data-dc-tpl="53" class="servGrantDivItem">{{ $pillBlock->items[7]}}</span>
    @endif


    
</div>
</div>
</section>




<section data-dc-tpl="60" class="servFaq" id="FAQs">
<p data-dc-tpl="61" class="secName">FAQ</p>
<div data-dc-tpl="62" class="servFaqDiv">
@foreach ($faqs as $faq)
@if ($faq->status == 1)  
<div data-dc-tpl="66" class="servFaqSec">

<h3 data-dc-tpl="67" class="servFaqQue">{!! nl2br(e($faq->question)) !!}</h3>
<p data-dc-tpl="68" class="servFaqAns">{!! nl2br(e($faq->answer)) !!}</p>

</div>
@endif
</div>
</section>
@endforeach
<div class="col-3 pe-5">{{ $faqs->links() }}</div>

@endsection