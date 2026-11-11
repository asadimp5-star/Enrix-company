@extends('admin.layout.master-page')

@section('title','Edit FAQ')

@section('frequ','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.FAQ.index') }}">List of FAQ</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">Edit FAQ</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Edit FAQ')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 TimesRoman" action="{{ route('admin.faq.update',$quests->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <ul class="nav nav-tabs mb-3" id="langTab" role="tablist">
        <li class="nav-item">
          <a href="#en" class="nav-link" data-bs-toggle="tab">English</a>
        </li>
        <li class="nav-item">
          <a href="#nl" class="nav-link active" data-bs-toggle="tab">Dutch</a>
        </li>
        
       </ul>

      <div class="tab-content">

        <div class="tab-pane fade show active" id="en">

    <div class="col-md-4 mb-3">
    <label for="en_question"  class="form-label d-block ">Question</label>
    <input type="text" class="form-control" id="en_question" name="en[question]" value="{{ $quests->translate('en')?->question??'' }}">
    @error('en.question')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

    <div class="mb-3 col-8 mb-3">
    <label for="en_answer" class="form-label">Answer</label>
    <textarea class="form-control" name="en[answer]" >{{ $quests->translate('en')?->answer??'' }}</textarea>
    @error('en.answer')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>
    
  </div>
  
    <div class="tab-pane fade" id="nl">
       <div class="col-md-4 mb-2">
  <label for="nl_question"  class="form-label d-block ">Question</label>
    <input type="text" class="form-control" id="nl_question" name="nl[question]" value="{{ $quests->translate('nl')?->question??'' }}">
    @error('nl.question')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
       </div>

       <div class="mb-3 col-8 mb-2">
    <label for="nl_answer" class="form-label">Answer</label>
    <textarea class="form-control" name="nl[answer]" >{{ $quests->translate('nl')?->answer??'' }}</textarea>
    @error('nl.answer')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
       </div>

    </div>


      </div>

  
  
  <div class="col-12 mt-5">
                <button class="btn btn-primary" type="submit">Registration</button>
            </div>
  
  
</form>
    </section>
<div class="col-12 mt-3">
    <a class="btn btn-warning" href="{{ route('admin.FAQ.index') }}">Return</a>
  </div>
</section>


@endsection