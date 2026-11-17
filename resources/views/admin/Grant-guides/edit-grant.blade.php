@extends('admin.layout.master-page')

@section('title','DATA')

@section('frequ','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.FAQ.index') }}">List of DATA</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">edit stories</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','edit grant')

@section('content')



<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.grant.update',$grants->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <ul class="nav nav-tabs mb-3" id="langTab" role="tablist">
        
        <li class="nav-item">
          <a href="#nl" class="nav-link" data-bs-toggle="tab">Dutch</a>
        </li>
      
        <li class="nav-item">
          <a href="#en" class="nav-link" data-bs-toggle="tab">English</a>
        </li>
        
        
       </ul>

<div class="tab-content">

<div class="tab-pane fade show active" id="en">

    <div class="col-md-4 mb-3">
    <label for="en_title"  class="form-label d-block ">title(en)</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ $grants->translate('en')?->title??'' }}">
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>


  

  <div class="mb-3 col-8 mb-3">
    <label for="en_desc" class="form-label mt-5">describe</label>
    <textarea class="form-control" name="en[desc]" >{{ $grants->translate('en')?->desc??'' }}</textarea>
    @error('en.desc')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


</div>
  
<div class="tab-pane fade" id="nl">
    <div class="col-md-4 mb-2">
  <label for="nl_title"  class="form-label d-block ">title</label>
    <input type="text" class="form-control" id="nl_title" name="nl[title]" value="{{ $grants->translate('nl')?->title??'' }}">
    @error('nl.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

  <div class="mb-3 col-8 mb-2">
    <label for="nl_desc" class="form-label">describ</label>
    <textarea class="form-control" name="nl[desc]" >{{ $grants->translate('nl')?->desc??'' }}</textarea>
    @error('nl.desc')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

</div>


</div>


  
  <div class="col-12 mt-5">
                <button class="btn btn-primary mb-2" type="submit">Registration</button>
            </div>
  
  
</form>
    </section>
<div class="col-12 mt-1">
    <a class="btn btn-warning" href="{{ route('admin.FAQ.index') }}">Return</a>
  </div>
</section>


@endsection