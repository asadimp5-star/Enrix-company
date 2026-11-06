@extends('admin.layout.master-page')

@section('title','Editing articles')

@section('pos','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 " aria-current="page"><a class="text-decoration-none" href="{{ route('admin.posts.post') }}">List of articles</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">Editing articles</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Editing articles')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="#" method="post" enctype="multipart/form-data">
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
<div class="col-md-4">
    <label for="fa_title"  class="form-label d-block ">عنوان*</label>
    <input type="text" class="form-control" id="fa_title" name="fa[title]" value="#">
    @error('fa.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
  <div class="col-md-4">
    <label for="fa_slug"  class="form-label d-block ">اسلاگ*</label>
    <input type="text" class="form-control" id="fa_slug" name="fa[slug]" value="#">
    @error('fa.slug')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>

<section class="col-3 justify-content-center">

    <div class="card shadow-sm mt-2" > 
      <img src="#" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="#">

      @if (1==1)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_img0" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_img0" value="1" id="delete0">
          <label class="form-check-label" for="delete_img0">حذف تصویر</label>
        </div>

      @endif

      
    </div>
    
    <div class="card-body"> 
      <div class="col-md-10">
    <label for="images0" class="form-label">تصویر</label>
    <input class="form-control" type="file" name="images0">
    @error('images0')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
    </div>
    
    
</section>
  

<div class="mb-3 col-8">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" name="fa[description]"></textarea>
    @error('fa.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

<section class="col-3 justify-content-center">

  <div class="card shadow-sm mt-2" > 
      <img src="#" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="#">

      @if (1==1)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_img" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_img" value="1" id="delete0">
          <label class="form-check-label" for="delete_img">حذف تصویر</label>
        </div>

      @endif

      
  </div>
    
    <div class="card-body"> 
       <div class="col-md-10">
    <label for="images" class="form-label">تصویر2</label>
    <input class="form-control" type="file" name="images">
    @error('images')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  </div> 
</section>

  <div class="mb-3 col-8">
    <label for="fa_description1" class="form-label">1توضیحات</label>
    <textarea class="form-control" name="fa[description1]"></textarea>
    @error('fa.description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

<section class="col-3 justify-content-center">

    <div class="card shadow-sm mt-2" > 
      <img src="#" class="bd-placeholder-img card-img-top" height="225" role="img" width="100%" alt="#">

      @if (1==1)
        <div class="form-check form-switch m-2">
          <input type="hidden" name="delete_img1" value="0">  
          <input class="form-check-input" type="checkbox" role="switch" name="delete_img1" value="1" id="delete0">
          <label class="form-check-label" for="delete_img1">حذف تصویر</label>
        </div>

      @endif

      
    </div>
    
    <div class="card-body"> 
       <div class="col-md-10">
    <label for="images1" class="form-label">تصویر2</label>
    <input class="form-control" type="file" name="images1">
    @error('images1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
    </div>

 
</section>

  <div class="mb-3 col-8">
    <label for="fa_description2" class="form-label">توضیحات2</label>
    <textarea class="form-control" name="fa[description2]"></textarea>
    @error('fa.description2')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

            


        </div>
  
        <div class="tab-pane fade" id="nl">
<div class="col-md-4 tab-pane fade show active" id="en">
    <label for="en_title"  class="form-label d-block ">title*</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="#">
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>

  <div class="col-md-4">
    <label for="en_slug"  class="form-label d-block ">slug*</label>
    <input type="text" class="form-control" id="en_slug" name="en[slug]" value="#">
    @error('en.slug')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
    
  </div>
  
  <div class="mb-3 col-8">
    <label for="en_description" class="form-label">description</label>
    <textarea class="form-control" name="en[description]"></textarea>
    @error('en.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3 col-8">
    <label for="en_description1" class="form-label">description1</label>
    <textarea class="form-control" name="en[description1]"></textarea>
    @error('en.description1')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3 col-8">
    <label for="en_description2" class="form-label">description2</label>
    <textarea class="form-control" name="en[description2]"></textarea>
    @error('en_description2')
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
<div class="col-12">
    <a class="btn btn-warning" href="#">Return</a>
  </div>
</section>


@endsection