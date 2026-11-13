@extends('admin.layout.master-page')

@section('title','edit customers')

@section('pos','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.customer.index') }}">List of customers</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">edit customers</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','edit customers')

@section('content')



<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.customer.update',$customr->id) }}" method="post" enctype="multipart/form-data">
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
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ $customr->translate('en')?->title??'' }}">
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>


  <section class="col-3 justify-content-center">

    <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/customerImg/' .$customr->image1) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $customr->translate('en')?->title??'' }}">
      
    </div>
    
    <div class="card-body mt-5"> 
      <div class="col-md-10 mt-5">
    <label for="image1" class="form-label">insert logo image</label>
    <input class="form-control" type="file" name="image1">
    @error('image1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
    </div>
    
    
</section>

  <div class="mb-3 col-8 mb-3">
    <label for="en_desc" class="form-label mt-5">summery</label>
    <textarea class="form-control" name="en[desc]" >{{ $customr->translate('en')?->desc??'' }}</textarea>
    @error('en.desc')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


</div>
  
<div class="tab-pane fade" id="nl">
    <div class="col-md-4 mb-2">
  <label for="nl_title"  class="form-label d-block ">title</label>
    <input type="text" class="form-control" id="nl_title" name="nl[title]" value="{{ $customr->translate('nl')?->title??'' }}">
    @error('nl.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

  <div class="mb-3 col-8 mb-2">
    <label for="nl_desc" class="form-label">summery</label>
    <textarea class="form-control" name="nl[desc]" >{{ $customr->translate('nl')?->desc??'' }}</textarea>
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
    <a class="btn btn-warning" href="{{ route('admin.customer.index') }}">Return</a>
  </div>
</section>


@endsection