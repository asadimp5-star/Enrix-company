@extends('admin.layout.master-page')

@section('title','Content management')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="{{ route('admin.content.index') }}">Content management</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">Services</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Services page')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.content.services.update',$serve ) }}" method="post" enctype="multipart/form-data">
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
    <label for="en_title"  class="form-label d-block ">title</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ $serve->translate('en')?->title??'' }}">
        </div>

        <div class="mb-3 col-8 mb-3">
    <label for="en_desc" class="form-label">summery</label>
    <textarea class="form-control" name="en[desc]" >{{ $serve->translate('en')?->desc??'' }}</textarea>

        </div>
      
        <div>
          @php 
          $block0 = $serve->blocks[0] ?? null;
          @endphp
            <input type="hidden" class="form-control"  name="blocks[0][type]" value="checkList">

            <div class="col-md-4 mb-3">
              <label   class="form-label d-block ">Who it's for</label>
              <input type="text" class="form-control" name="blocks[0][en][lable]" value="{{ $block0?->translate('en')?->lable ?? '' }}">
            </div>

            <div class="col-md-4 mb-3">
              <label for="en_title"  class="form-label d-block ">items</label>
              <input type="text" class="form-control"  name="blocks[0][en][items][]" value="{{ $block0?->translate('en')?->items[0] ?? '' }}">
              <input type="text" class="form-control"  name="blocks[0][en][items][]" value="{{ $block0?->translate('en')?->items[1] ?? '' }}">
              <input type="text" class="form-control"  name="blocks[0][en][items][]" value="{{ $block0?->translate('en')?->items[2] ?? '' }}">
              <input type="text" class="form-control"  name="blocks[0][en][items][]" value="{{ $block0?->translate('en')?->items[3] ?? '' }}">
              
            </div>
  
        </div>
        
        <div>
          @php 
          $block1 = $serve->blocks[1] ?? null;
          @endphp
            <input type="hidden" class="form-control"  name="blocks[1][type]" value="checkList">

          <div class="col-md-4 mb-3">

          <label  class="form-label d-block ">What's included</label>
          <input type="text" class="form-control" name="blocks[1][en][lable]" value="{{ $block1?->translate('en')?->lable ?? '' }}">
          </div>

          <div class="col-md-4 mb-3">
          <label   class="form-label d-block ">items</label>
            <input type="text" class="form-control"  name="blocks[1][en][items][]" value="{{ $block1?->translate('en')?->items[0] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[1][en][items][]" value="{{ $block1?->translate('en')?->items[1] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[1][en][items][]" value="{{ $block1?->translate('en')?->items[2] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[1][en][items][]" value="{{ $block1?->translate('en')?->items[3] ?? '' }}">
          
        </div>
        </div>

        <div>
          @php 
          $block2 = $serve->blocks[2] ?? null;
          @endphp
          <input type="hidden" class="form-control"  name="blocks[2][type]" value="checkList">

          <div class="col-md-4 mb-3">
          <label   class="form-label d-block ">How it works</label>
          <input type="text" class="form-control" name="blocks[2][en][lable]" value="{{ $block2->translate('en')->lable ?? ''}}">
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
            <input type="text" class="form-control"  name="blocks[2][en][items][]" value="{{ $block2?->translate('en')?->items[6] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[2][en][items][]" value="{{ $block2?->translate('en')?->items[7] ?? '' }}">
            <br>
          
    
          </div>
        </div>  

        <div>
          @php 
          $block3 = $serve->blocks[3] ?? null;
          @endphp
          <input type="hidden" class="form-control"  name="blocks[3][type]" value="checkList">


          <div class="col-md-4 mb-3">
          <label class="form-label d-block ">Grants covered</label>
          <input type="text" class="form-control" name="blocks[3][en][lable]" value="{{ $block3->translate('en')->lable ?? '' }}">
          </div>

          <div class="col-md-4 mb-3">
          <label for="en_title"  class="form-label d-block ">pills</label>

            <input type="text" class="form-control"  name="blocks[3][en][items][]" value="{{ $block3?->translate('en')?->items[0] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][en][items][]" value="{{ $block3?->translate('en')?->items[1] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][en][items][]" value="{{ $block3?->translate('en')?->items[2] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][en][items][]" value="{{ $block3?->translate('en')?->items[3] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][en][items][]" value="{{ $block3?->translate('en')?->items[4] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][en][items][]" value="{{ $block3?->translate('en')?->items[5] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][en][items][]" value="{{ $block3?->translate('en')?->items[6] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][en][items][]" value="{{ $block3?->translate('en')?->items[7] ?? '' }}">
          
    
          </div>
        </div>
      


      </div>

       <div class="tab-pane fade" id="nl">

      <div class="col-md-4 mb-3">
    <label for="nl_title"  class="form-label d-block ">title</label>
    <input type="text" class="form-control" id="nl_title" name="nl[title]" value="{{ $serve->translate('nl')?->title??'' }}">
    </div>

    <div class="mb-3 col-8 mb-3">
    <label for="nl_desc" class="form-label">summery</label>
    <textarea class="form-control" name="nl[desc]">{{ $serve->translate('nl')?->desc??'' }}</textarea>

  </div>

  </div>
      
        <div>
          @php 
          $block0 = $serve->blocks[0] ?? null;
          @endphp
            <input type="hidden" class="form-control"  name="blocks[0][type]" value="checkList">

            <div class="col-md-4 mb-3">
              <label   class="form-label d-block ">Who it's for</label>
              <input type="text" class="form-control" name="blocks[0][nl][lable]" value="{{ $block0?->translate('nl')?->lable ?? '' }}">
            </div>

            <div class="col-md-4 mb-3">
              <label for="en_title"  class="form-label d-block ">items</label>
              <input type="text" class="form-control"  name="blocks[0][nl][items][]" value="{{ $block0?->translate('nl')?->items[0] ?? '' }}">
              <input type="text" class="form-control"  name="blocks[0][nl][items][]" value="{{ $block0?->translate('nl')?->items[1] ?? '' }}">
              <input type="text" class="form-control"  name="blocks[0][nl][items][]" value="{{ $block0?->translate('nl')?->items[2] ?? '' }}">
              <input type="text" class="form-control"  name="blocks[0][nl][items][]" value="{{ $block0?->translate('nl')?->items[3] ?? '' }}">
              
            </div>
  
        </div>
        
        <div>
          @php 
          $block1 = $serve->blocks[1] ?? null;
          @endphp
            <input type="hidden" class="form-control"  name="blocks[1][type]" value="checkList1">

          <div class="col-md-4 mb-3">

          <label  class="form-label d-block ">What's included</label>
          <input type="text" class="form-control" name="blocks[1][nl][lable]" value="{{ $block1?->translate('nl')?->lable ?? '' }}">
          </div>

          <div class="col-md-4 mb-3">
          <label   class="form-label d-block ">items</label>
            <input type="text" class="form-control"  name="blocks[1][nl][items][]" value="{{ $block1?->translate('nl')?->items[0] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[1][nl][items][]" value="{{ $block1?->translate('nl')?->items[1] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[1][nl][items][]" value="{{ $block1?->translate('nl')?->items[2] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[1][nl][items][]" value="{{ $block1?->translate('nl')?->items[3] ?? '' }}">
          
        </div>
        </div>

        <div>
          @php 
          $block2 = $serve->blocks[2] ?? null;
          @endphp
          <input type="hidden" class="form-control"  name="blocks[2][type]" value="step">
          
          <div class="col-md-4 mb-3">
          <label   class="form-label d-block ">How it works</label>
          <input type="text" class="form-control" name="blocks[2][nl][lable]" value="{{ $block2->translate('nl')->lable ?? ''}}">
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
            <input type="text" class="form-control"  name="blocks[2][nl][items][]" value="{{ $block2?->translate('nl')?->items[6] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[2][nl][items][]" value="{{ $block2?->translate('nl')?->items[7] ?? '' }}">
            <br>
          
    
          </div>
        </div>  

        <div>
          @php 
          $block3 = $serve->blocks[3] ?? null;
          @endphp
          <input type="hidden" class="form-control"  name="blocks[3][type]" value="pill">


          <div class="col-md-4 mb-3">
          <label class="form-label d-block ">Grants covered</label>
          <input type="text" class="form-control" name="blocks[3][nl][lable]" value="{{ $block3->translate('nl')->lable ?? '' }}">
          </div>

          <div class="col-md-4 mb-3">
          <label for="en_title"  class="form-label d-block ">pills</label>

            <input type="text" class="form-control"  name="blocks[3][nl][items][]" value="{{ $block3?->translate('nl')?->items[0] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][nl][items][]" value="{{ $block3?->translate('nl')?->items[1] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][nl][items][]" value="{{ $block3?->translate('nl')?->items[2] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][nl][items][]" value="{{ $block3?->translate('nl')?->items[3] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][nl][items][]" value="{{ $block3?->translate('nl')?->items[4] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][nl][items][]" value="{{ $block3?->translate('nl')?->items[5] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][nl][items][]" value="{{ $block3?->translate('nl')?->items[6] ?? '' }}">
            <input type="text" class="form-control"  name="blocks[3][nl][items][]" value="{{ $block3?->translate('nl')?->items[7] ?? '' }}">
          
    
          </div>
        </div>

      
    



       </div>
  
  
   <div class="col-12 mt-4">
    <button class="btn btn-primary" type="submit">Registration</button>
  </div>
  
  
</form>


  <div class="col-12 mt-2">
    <a class="btn btn-warning" href="{{ route('admin.content.index') }}">Return</a>
  </div>
    </section>

</section>


@endsection