@extends('front-client.layout.masterPage')

@section('title',app()->getLocale() == 'en' ? 'Enrix Company contact' : 'Enrix Company contact')

@section('cont','active')


@section('content')

<section data-dc-tpl="5" class="resorceHero">
<p data-dc-tpl="6" class="secName">Page intro</p>
<h1 data-dc-tpl="7" class="resorceHeroTitle">Let's get in touch</h1>
<hr class="bg w-25">
<p data-dc-tpl="8" class="resorceHeroDesc">Whether you're a startup looking for funding or an accelerator exploring a partnership, I'd love to hear from you. [Adjust to your own words.]</p>
</section>
<section data-dc-tpl="9" class="contact">
<div data-dc-tpl="10" class="contactDiv1">
<p data-dc-tpl="11" class="secName">Contact form</p>
<h2 data-dc-tpl="12" class="contactFormTitle">Send me a message</h2>
@if (session('successe'))
      <section class="container-fluid d-flex justify-content-center">
        <div class="alert alert-success col-10 text-center m-1" role="alert">
         <h6 class="yekan">{{session('successe')}}</h6>
          
        </div>
      </section>

    @endif
<div data-dc-tpl="13" class="contactForm">
<form action="{{ route('admin.message.create') }}" method="post">
       @csrf
<div data-dc-tpl="14" class="contactFormItem">
<div data-dc-tpl="15" class="contactFormItem1">
<label data-dc-tpl="16" for="c-name" class="contactFormItem1Name">Name <span class="text-danger">*</span></label>
<input data-dc-tpl="17" id="c-name" name="name" type="text" class="contactFormItem1NameInput">
@error('name')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<div data-dc-tpl="18" style="flex: 1 1 220px; display: flex; flex-direction: column; gap: 6px;">
<label data-dc-tpl="19" for="c-email" class="contactFormItem1Name">Email <span class="text-danger">*</span></label>
<input data-dc-tpl="20" id="c-email" name="email" type="email" class="contactFormItem1NameInput">
@error('email')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
</div>
<div data-dc-tpl="21" class="contactFormItem2 mt-3">
<label data-dc-tpl="22" for="c-org" class="contactFormItem1Name">Company or organisation</label>
<input data-dc-tpl="23" id="c-org" name="company" type="text" class="contactFormItem1NameInput">
@error('company')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<fieldset data-dc-tpl="24" class="contactFormRadio mt-3">
<legend data-dc-tpl="25" class="contactFormRadioTitle">I am a… <span class="text-danger">*</span></legend>
<div data-dc-tpl="26" class="contactFormRadioDiv">
<label data-dc-tpl="27" class="contactFormRadioDivItem">
<input data-dc-tpl="28" type="radio" name="i_am" value="0" {{ old('i_am')=='0'?'checked':'' }}> Startup</label>
<label data-dc-tpl="29" class="contactFormRadioDivItem">
<input data-dc-tpl="30" type="radio" name="i_am" value="1" {{ old('i_am')=='1'?'checked':'' }}> Accelerator / startup hub</label>
<label data-dc-tpl="31" class="contactFormRadioDivItem">
<input data-dc-tpl="32" type="radio" name="i_am" value="2" {{ old('i_am')=='2'?'checked':'' }}> Other</label>
</div>
@error('i_am')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</fieldset>
<div data-dc-tpl="33" class="contactFormItem2 mt-3">
<label data-dc-tpl="34" for="c-topic" class="contactFormItem1Name">What is it about?</label>
<select data-dc-tpl="35" id="c-topic" name="What_is_it_about" class="contactFormSelect">
<option data-dc-tpl="36" value="0" {{ old('What_is_it_about')=='0'?'selected':'' }}>Grant writing</option>
<option data-dc-tpl="37" value="1" {{ old('What_is_it_about')=='1'?'selected':'' }}>Strategic advisory</option>
<option data-dc-tpl="38" value="2" {{ old('What_is_it_about')=='2'?'selected':'' }}>Partnership</option>
<option data-dc-tpl="39" value="3" {{ old('What_is_it_about')=='3'?'selected':'' }}>Something else</option>
</select>
@error('What_is_it_about')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
<div data-dc-tpl="40" class="contactFormItem2 mt-3">
<label data-dc-tpl="41" for="c-msg" class="contactFormItem1Name">Message <span class="text-danger">*</span></label>
<textarea data-dc-tpl="42" id="c-msg" name="message" rows="6" class="contactFormDesc">
</textarea>
@error('message')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>

<div data-dc-tpl="45" class="mt-3">
<button data-dc-tpl="46" type="submit" class="contactFormBut">Send message</button>
</div>
</form>
</div>
</div>
<div data-dc-tpl="47" class="contactDivSide">
<div data-dc-tpl="48" class="contactDivSide1">
<p data-dc-tpl="49" class="secName">Direct contact</p>
<div data-dc-tpl="50" class="contactDivSide1Title">
<div data-dc-tpl="51">
<p data-dc-tpl="52" class="contactDivSide1Name">Email</p>
<a data-dc-tpl="53" href="#">[your email address]</a>
</div>
<div data-dc-tpl="54">
<p data-dc-tpl="55" class="contactDivSide1Name">LinkedIn</p>
<a data-dc-tpl="56" href="#">[your LinkedIn profile]</a>
</div>
<div data-dc-tpl="57">
</div>
</div>
</div>
<div data-dc-tpl="58" class="contactDivSide2">
<p data-dc-tpl="59" class="secName">What happens next</p>
<div data-dc-tpl="60" class="contactDivSide1Title">
<div data-dc-tpl="61" class="contactDivSide2Title">
<span data-dc-tpl="62" class="contactDivSide2Num">1</span>
<p data-dc-tpl="63" class="m-0">I reply within 2 working days.</p>
</div>
<div data-dc-tpl="64" class="contactDivSide2Title">
<span data-dc-tpl="65" class="contactDivSide2Num">2</span>
<p data-dc-tpl="66" class="m-0">We plan a free 30-minute intro call.</p>
</div>
<div data-dc-tpl="67" class="contactDivSide2Title">
<span data-dc-tpl="68" class="contactDivSide2Num">3</span>
<p data-dc-tpl="69" class="m-0">We explore whether and how I can help.</p>
</div>
</div>
</div>
</div>
</section>

<section data-dc-tpl="70" class="contactBook">
<p data-dc-tpl="71" class="secName">Book an intro call</p>
<div data-dc-tpl="72" class="contactBookDiv">
<div data-dc-tpl="73" class="contactBookDivTitle">
<h2 data-dc-tpl="74" class="contactBookDivDesc">Prefer to pick a time yourself?</h2>
<p data-dc-tpl="75" class="contactBookDivDesc1">Choose a moment that suits you for a free 30-minute intro call.</p>
</div>
<button data-dc-tpl="76" type="button" class="contactFormBut">Book a time</button>
</div>
</section>




@endsection