@extends('admin.layout.master-page')

@section('title','Content management')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="#">Content management</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">services</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','services')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.content.first-page.store') }}" method="post" enctype="multipart/form-data">
      @csrf

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
    <input type="text" class="form-control" id="en_title" name="en[title]" value="{{ old('en.title') }}">
    </div>

    <div class="mb-3 col-8 mb-3">
    <label for="en_desc" class="form-label">summery</label>
    <textarea class="form-control" name="en[desc]" placeholder="Enter description..." value="{{ old('en.desc') }}"></textarea>

  </div>

  <div class="col-md-4 mb-3">
    <label for="image1" class="form-label">main image</label>
    <input class="form-control" type="file" name="image1">
    @error('image1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div>
    <input type="hidden" class="form-control"  name="blocks[0][type]" value="checkList">

   <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">Who I help</label>
        <input type="text" class="form-control" name="blocks[0][en][lable]" placeholder="sent1">
    </div>

    <div class="col-md-4 mb-3">
    <label for="en_title"  class="form-label d-block ">items</label>

    <input type="text" class="form-control"  name="blocks[0][en][items][]" placeholder="sent1">
    <textarea class="form-control" name="blocks[0][en][items][]" placeholder="sent1"></textarea>
    <br>
    <input type="text" class="form-control"  name="blocks[0][en][items][]" placeholder="sent3">
    <textarea class="form-control" name="blocks[0][en][items][]" placeholder="sent3"></textarea>
    <br>

    </div>
    
  </div>

  <div>
    <input type="hidden" class="form-control"  name="blocks[1][type]" value="checkList1">

  <div class="col-md-4 mb-3">

    <label  class="form-label d-block ">Services</label>
    <input type="text" class="form-control" name="blocks[1][en][lable]" placeholder="sent1">
    </div>

    <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">items</label>

    <input type="text" class="form-control"  name="blocks[1][en][items][]" placeholder="sent1">
    <textarea class="form-control" name="blocks[1][en][items][]" placeholder="sent1"></textarea>
    <br>
    <input type="text" class="form-control"  name="blocks[1][en][items][]" placeholder="sent3">
    <textarea class="form-control" name="blocks[1][en][items][]" placeholder="sent3"></textarea>
    <br>
    </div>
  </div>

    
  <div>
    <input type="hidden" class="form-control"  name="blocks[2][type]" value="step">

  <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">How I work</label>
    <input type="text" class="form-control" name="blocks[2][en][lable]" placeholder="sent1">
    </div>
    <div class="col-md-4 mb-3">
    <label class="form-label d-block ">steps title</label>

    <input type="text" class="form-control"  name="blocks[2][en][items][]" placeholder="sent1">
    <input type="text" class="form-control"  name="blocks[2][en][items][]" placeholder="desc1">
    <br>
    <input type="text" class="form-control"  name="blocks[2][en][items][]" placeholder="sent2">
    <input type="text" class="form-control"  name="blocks[2][en][items][]" placeholder="desc2">
    <br>
    <input type="text" class="form-control"  name="blocks[2][en][items][]" placeholder="sent3">
    <input type="text" class="form-control"  name="blocks[2][en][items][]" placeholder="desc3">
    <br>
    
    </div>
  </div>  
    

</div>

<div class="tab-pane fade" id="nl">

    <div class="col-md-4 mb-3">
    <label for="nl_title"  class="form-label d-block ">title</label>
    <input type="text" class="form-control" id="nl_title" name="nl[title]" value="{{ old('nl.title') }}">
    </div>

    <div class="mb-3 col-8 mb-3">
    <label for="nl_desc" class="form-label">summery</label>
    <textarea class="form-control" name="nl[desc]" placeholder="Enter description..." value="{{ old('nl.desc') }}"></textarea>
    </div>

  <div>
    <input type="hidden" class="form-control"  name="blocks[0][type]" value="checkList">

   <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">Who I help</label>
        <input type="text" class="form-control" name="blocks[0][nl][lable]" placeholder="sent1">
    </div>

    <div class="col-md-4 mb-3">
    <label for="en_title"  class="form-label d-block ">items</label>

    <input type="text" class="form-control"  name="blocks[0][nl][items][]" placeholder="sent1">
    <textarea class="form-control" name="blocks[0][nl][items][]" placeholder="sent1"></textarea>
    <br>
    <input type="text" class="form-control"  name="blocks[0][nl][items][]" placeholder="sent3">
    <textarea class="form-control" name="blocks[0][nl][items][]" placeholder="sent3"></textarea>
    <br>

    </div>
    
  </div>

  <div>
    <input type="hidden" class="form-control"  name="blocks[1][type]" value="checkList1">

  <div class="col-md-4 mb-3">

    <label  class="form-label d-block ">Services</label>
    <input type="text" class="form-control" name="blocks[1][nl][lable]" placeholder="sent1">
    </div>

    <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">items</label>

    <input type="text" class="form-control"  name="blocks[1][nl][items][]" placeholder="sent1">
    <textarea class="form-control" name="blocks[1][nl][items][]" placeholder="sent1"></textarea>
    <br>
    <input type="text" class="form-control"  name="blocks[1][nl][items][]" placeholder="sent3">
    <textarea class="form-control" name="blocks[1][nl][items][]" placeholder="sent3"></textarea>
    <br>
    </div>
  </div>

    
  <div>
    <input type="hidden" class="form-control"  name="blocks[2][type]" value="step">

  <div class="col-md-4 mb-3">
    <label   class="form-label d-block ">How I work</label>
    <input type="text" class="form-control" name="blocks[2][nl][lable]" placeholder="sent1">
    </div>
    <div class="col-md-4 mb-3">
    <label class="form-label d-block ">steps title</label>

    <input type="text" class="form-control"  name="blocks[2][nl][items][]" placeholder="sent1">
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" placeholder="desc1">
    <br>
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" placeholder="sent2">
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" placeholder="desc2">
    <br>
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" placeholder="sent3">
    <input type="text" class="form-control"  name="blocks[2][nl][items][]" placeholder="desc3">
    <br>
    
    </div>
  </div> 

      
    



</div>
  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registration</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="#">Return</a>
  </div>
</form>
    </section>

</section>


@endsection