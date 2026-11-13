@extends('admin.layout.master-page')

@section('title','Content management')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.index') }}">Content management</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">Home page</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Home page')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.content.first-page.update',$first) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')


      <ul class="nav nav-tabs mb-3" id="langTab" role="tablist">
        <li class="nav-item">
          <a href="#en" class="nav-link" data-bs-toggle="tab">English</a>
        </li>
        <li class="nav-item">
          <a href="#nl" class="nav-link active" data-bs-toggle="tab">Duch</a>
        </li>
        
       </ul>

       <div class="tab-content">

<div class="tab-pane fade show active" id="en">

    <div class="col-md-4 mb-3">
    <label for="en_title"  class="form-label d-block ">Introduction</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ $first->translate('en')?->title??'' }}">
    </div>

    <div class="mb-3 col-8 mb-3">
    <label for="en_desc" class="form-label">summery</label>
    <textarea class="form-control" name="en[desc]" >{{ $first->translate('en')?->desc??'' }}</textarea>

  </div>

  <section class="col-3 justify-content-center">

    <div class="card shadow-sm mt-2" > 
      <img src="{{ asset('storage/firstImg/' .$first->image1) }}" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="{{ $first->translate('en')?->title??'' }}">

      @if ($first->image1)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_img1" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_img1" value="1" id="delete0">
          <label class="form-check-label" for="delete_img1">Delete image</label>
        </div>

      @endif

      
    </div>
    
    <div class="card-body"> 
      <div class="col-md-10">
    <label for="image1" class="form-label">main image</label>
    <input class="form-control" type="file" name="image1">
    @error('image1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
    </div>
    
    
</section>

  <div>
    @php 
      $block0 = $first->blocks[0] ?? null;
    @endphp
    <input type="hidden" class="form-control"  name="blocks[0][type]" value="checkList">

   <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">Who I help</label>
        <input type="text" class="form-control" name="blocks[0][en][lable]" value="{{ $block0?->translate('en')?->lable ?? '' }}">
    </div>

    <div class="col-md-4 mb-3">
    <label for="en_title"  class="form-label d-block ">items</label>

    <input type="text" class="form-control"  name="blocks[0][en][items][]" value="{{ $block0?->translate('en')?->items[0] ?? '' }}">
    <textarea class="form-control" name="blocks[0][en][items][]" >{{ $block0?->translate('en')?->items[1] ?? '' }}</textarea>
    <br>
    <input type="text" class="form-control"  name="blocks[0][en][items][]" value="{{ $block0?->translate('en')?->items[2] ?? '' }}">
    <textarea class="form-control" name="blocks[0][en][items][]" >{{ $block0?->translate('en')?->items[3] ?? '' }}</textarea>
    <br>

    </div>
    
  </div>

  <div>
    @php 
      $block1 = $first->blocks[1] ?? null;
    @endphp
    <input type="hidden" class="form-control"  name="blocks[1][type]" value="checkList1">

  <div class="col-md-4 mb-3">

    <label  class="form-label d-block ">Services</label>
    <input type="text" class="form-control" name="blocks[1][en][lable]" value="{{ $block1?->translate('en')?->lable ?? '' }}">
    </div>

    <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">items</label>

    <input type="text" class="form-control"  name="blocks[1][en][items][]" value="{{ $block1?->translate('en')?->items[0] ?? '' }}">
    <textarea class="form-control" name="blocks[1][en][items][]" >{{ $block1?->translate('en')?->items[0] ?? '' }}</textarea>
    <br>
    <input type="text" class="form-control"  name="blocks[1][en][items][]" value="{{ $block1?->translate('en')?->items[0] ?? '' }}">
    <textarea class="form-control" name="blocks[1][en][items][]" >{{ $block1?->translate('en')?->items[0] ?? '' }}</textarea>
    <br>
    </div>

  </div>

    
  <div>
    @php 
        $block2 = $first->blocks[2] ?? null;
    @endphp
    <input type="hidden" class="form-control"  name="blocks[2][type]" value="step">

  <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">How I work</label>
    <input type="text" class="form-control" name="blocks[2][en][lable]" value="{{ $block2->translate('en')->lable ?? '' }}">
    </div>
    <div class="col-md-4 mb-3">
    <label class="form-label d-block ">steps title</label>

    <input type="text" class="form-control"  name="blocks[2][en][items][]" value="{{ $block2?->translate('en')?->items[0] ?? '' }}">
    <input type="text" class="form-control"  name="blocks[2][en][items][]" value="{{ $block2?->translate('en')?->items[1] ?? '' }}">
    <br>
    <input type="text" class="form-control"  name="blocks[2][en][items][]" value="{{ $block2?->translate('en')?->items[2] ?? '' }}">
    <input type="text" class="form-control"  name="blocks[2][en][items][]" value="{{ $block2?->translate('en')?->items[3] ?? '' }}">
    <br>
    <input type="text" class="form-control"  name="blocks[2][en][items][]" value="{{ $block2?->translate('en')?->items[4] ?? '' }}">
    <input type="text" class="form-control"  name="blocks[2][en][items][]" value="{{ $block2?->translate('en')?->items[5] ?? '' }}">
    <br>
    
    </div>
  </div>  
    

</div>

<div class="tab-pane fade" id="nl">

    <div class="col-md-4 mb-3">
    <label for="nl_title"  class="form-label d-block ">title</label>
    <input type="text" class="form-control" id="nl_title" name="nl[title]" value="{{ $first->translate('nl')?->title??'' }}">
    </div>

    <div class="mb-3 col-8 mb-3">
    <label for="nl_desc" class="form-label">summery</label>
    <textarea class="form-control" name="nl[desc]" >{{ $first->translate('nl')?->desc??'' }}</textarea>
    </div>

  <div>
    @php 
      $block0 = $first->blocks[0] ?? null;
    @endphp
    <input type="hidden" class="form-control"  name="blocks[0][type]" value="checkList">

   <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">Who I help</label>
        <input type="text" class="form-control" name="blocks[0][nl][lable]" value="{{ $block0?->translate('nl')?->lable ?? '' }}">
    </div>

    <div class="col-md-4 mb-3">
    <label for="en_title"  class="form-label d-block ">items</label>

    <input type="text" class="form-control"  name="blocks[0][nl][items][]" value="{{ $block0?->translate('nl')?->items[0] ?? '' }}">
    <textarea class="form-control" name="blocks[0][nl][items][]">{{ $block0?->translate('nl')?->items[1] ?? '' }}</textarea>
    <br>
    <input type="text" class="form-control"  name="blocks[0][nl][items][]" value="{{ $block0?->translate('nl')?->items[2] ?? '' }}">
    <textarea class="form-control" name="blocks[0][nl][items][]" >{{ $block0?->translate('nl')?->items[3] ?? '' }}</textarea>
    <br>

    </div>
    
  </div>

  <div>
    @php 
      $block1 = $first->blocks[1] ?? null;
    @endphp
    <input type="hidden" class="form-control"  name="blocks[1][type]" value="checkList1">

  <div class="col-md-4 mb-3">

    <label  class="form-label d-block ">Services</label>
    <input type="text" class="form-control" name="blocks[1][nl][lable]" value="{{ $block1?->translate('nl')?->lable ?? '' }}">
    </div>

    <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">items</label>

    <input type="text" class="form-control"  name="blocks[1][nl][items][]" value="{{ $block1?->translate('nl')?->items[0] ?? '' }}">
    <textarea class="form-control" name="blocks[1][nl][items][]" >{{ $block1?->translate('nl')?->items[1] ?? '' }}</textarea>
    <br>
    <input type="text" class="form-control"  name="blocks[1][nl][items][]" value="{{ $block1?->translate('nl')?->items[2] ?? '' }}">
    <textarea class="form-control" name="blocks[1][nl][items][]" >{{ $block1?->translate('nl')?->items[3] ?? '' }}</textarea>
    <br>
    </div>
  </div>

    
  <div>
    @php 
      $block2 = $first->blocks[2] ?? null;
    @endphp
    <input type="hidden" class="form-control"  name="blocks[2][type]" value="step">

  <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">How I work</label>
    <input type="text" class="form-control" name="blocks[2][nl][lable]" value="{{ $block2?->translate('nl')?->lable ?? '' }}">
    </div>
    <div class="col-md-4 mb-3">
    <label class="form-label d-block ">steps title</label>

    <input type="text" class="form-control"  name="blocks[2][nl][items][]" value="{{ $block2?->translate('nl')?->items[0] ?? '' }}">
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" value="{{ $block2?->translate('nl')?->items[1] ?? '' }}">
    <br>
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" value="{{ $block2?->translate('nl')?->items[2] ?? '' }}">
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" value="{{ $block2?->translate('nl')?->items[3] ?? '' }}">
    <br>
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" value="{{ $block2?->translate('nl')?->items[4] ?? '' }}">
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" value="{{ $block2?->translate('nl')?->items[5] ?? '' }}">
    <br>
    
    </div>
  </div> 

      
    



</div>
  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registration</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('admin.content.index') }}">Return</a>
  </div>
</form>
    </section>

</section>


@endsection