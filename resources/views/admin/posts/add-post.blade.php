@extends('admin.layout.master-page')

@section('title','Add article')

@section('pos','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.resorses.resorse') }}">List of articles</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">Add article</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Add article')

@section('content')



<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.resorces.store') }}" method="post" enctype="multipart/form-data">
      @csrf

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
    <label for="en_title"  class="form-label d-block ">title*</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ old('en.title') }}">
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>


  <div class="col-md-4 mb-3">
    <label for="image1" class="form-label">main image</label>
    <input class="form-control" type="file" name="image1">
    @error('image1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8 mb-3">
    <label for="en_summery" class="form-label">summery</label>
    <textarea class="form-control" name="en[summery]" placeholder="Enter description..." value="{{ old('en.summery') }}"></textarea>
    @error('en.summery')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4 mb-3">
    <label for="en_keywords"  class="form-label d-block ">keywords</label>
    <input type="text" class="form-control" id="en_keywords" name="en[keywords]" value="{{ old('en.keywords') }}">
    @error('en.keywords')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>

  <div class="mb-3 col-8 mb-3">
    <label for="en_describe1" class="form-label">describe1</label>
    <textarea class="form-control" name="en[describe1]" placeholder="Enter description..." value="{{ old('en.describe1') }}"></textarea>
    @error('en.describe1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8 mb-3">
    <label for="en_describe2" class="form-label">describe2</label>
    <textarea class="form-control" name="en[describe2]" placeholder="Enter description..." value="{{ old('en.describe2') }}"></textarea>
    @error('en.describe2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4 mb-3">
    <label for="image2" class="form-label">image2</label>
    <input class="form-control" type="file" name="image2">
    @error('image2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8 mb-3">
    <label for="en_describe3" class="form-label">describe3</label>
    <textarea class="form-control" name="en[describe3]" placeholder="Enter description..." value="{{ old('en.describe3') }}"></textarea>
    @error('en.describe3')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  

  <div class="col-md-4 mb-3">
    <label for="image3" class="form-label">image3</label>
    <input class="form-control" type="file" name="image3">
    @error('image3')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8 mb-3">
    <label for="en_describe4" class="form-label">describe4</label>
    <textarea class="form-control" name="en[describe4]" placeholder="Enter description..." value="{{ old('en.describe4') }}"></textarea>
    @error('en.describe4')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4 mb-3">
    <label for="en_sourceTitle"  class="form-label d-block ">Sources</label>
    <input type="text" class="form-control" id="en_sourceTitle" name="en[sourceTitle]" value="{{ old('en.sourceTitle') }}">
    @error('en.sourceTitle')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4 mb-3">
    <label for="en_sourceDesc"  class="form-label d-block ">further reading</label>
    <input type="text" class="form-control" id="en_sourceDesc" name="en[sourceDesc]" value="{{ old('en.sourceDesc') }}">
    @error('en.sourceDesc')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4 mb-3">
    <label for="profImg" class="form-label">profile Image</label>
    <input class="form-control" type="file" name="profImg">
    @error('profImg')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4 mb-3">
    <label for="en_aouther"  class="form-label d-block ">About the author</label>
    <input type="text" class="form-control" id="en_aouther" name="en[aouther]" value="{{ old('en.aouther') }}">
    @error('en.aouther')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  

            


        </div>
  
        <div class="tab-pane fade" id="nl">
    <div class="col-md-4 mb-2">
  <label for="nl_title"  class="form-label d-block ">title</label>
    <input type="text" class="form-control" id="nl_title" name="nl[title]" value="{{ old('nl.title') }}">
    @error('nl.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    </div>

  <div class="mb-3 col-8 mb-2">
    <label for="nl_summery" class="form-label">summery</label>
    <textarea class="form-control" name="nl[summery]" placeholder="Enter description..." value="{{ old('nl.summery') }}"></textarea>
    @error('nl.summery')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4 mb-2">
    <label for="nl_keywords"  class="form-label d-block ">keywords</label>
    <input type="text" class="form-control" id="nl_keywords" name="nl[keywords]" value="{{ old('nl.keywords') }}">
    @error('nl.keywords')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>

  <div class="mb-3 col-8 mb-2">
    <label for="nl_describe1" class="form-label">describe1</label>
    <textarea class="form-control" name="nl[describe1]" placeholder="Enter description..." value="{{ old('nl.describe1') }}"></textarea>
    @error('nl.describe1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8 mb-2">
    <label for="nl_describe2" class="form-label">describe2</label>
    <textarea class="form-control" name="nl[describe2]" placeholder="Enter description..." value="{{ old('nl.describe2') }}"></textarea>
    @error('nl.describe2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


  <div class="mb-3 col-8 mb-2">
    <label for="nl_describe3" class="form-label">describe3</label>
    <textarea class="form-control" name="nl[describe3]" placeholder="Enter description..." value="{{ old('nl.describe3') }}"></textarea>
    @error('nl.describe3')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


  <div class="mb-3 col-8 mb-2">
    <label for="nl_describe4" class="form-label">describe4</label>
    <textarea class="form-control" name="nl[describe4]" placeholder="Enter description..." value="{{ old('nl.describe4') }}"></textarea>
    @error('nl.describe4')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="col-md-4 mb-2">
    <label for="nl_sourceTitle"  class="form-label d-block ">Sources</label>
    <input type="text" class="form-control" id="nl_sourceTitle" name="nl[sourceTitle]" value="{{ old('nl.sourceTitle') }}">
    @error('nl.sourceTitle')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-4 mb-2">
    <label for="nl_sourceDesc"  class="form-label d-block ">further reading</label>
    <input type="text" class="form-control" id="nl_sourceDesc" name="nl[sourceDesc]" value="{{ old('nl.sourceDesc') }}">
    @error('nl.sourceDesc')
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
    <a class="btn btn-warning" href="{{ route('admin.resorses.resorse') }}">Return</a>
  </div>
</section>


@endsection