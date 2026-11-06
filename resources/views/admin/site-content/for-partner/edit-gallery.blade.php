@extends('admin.layout.master-page')

@section('title','Photo editing')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="#">Content management</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="#">Gallery Management</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">Photo editing</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Photo editing')

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
    <label for="fa_title" class="form-label">عنوان</label>
    <input type="text" class="form-control" id="fa_title" name="fa[title]" value="" >
    @error('fa.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

  <div>
    <div class="col-3">
           <img src="#" class="bd-placeholder-img card-img-top" height="30%" role="img" width="30%" alt=""> 
        </div>
        <div class="col-md-4">
          <label for="images" class="form-label">تصویر</label>
          <input class="form-control" type="file" id="images" name="images">
        </div>
  </div>

  <div class="mb-3 col-7">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="fa_description" name="fa[description]"></textarea>
    @error('fa.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>




       </div>

       <div class="tab-pane fade" id="nl">

            <div class="col-md-4">
    <label for="en_title" class="form-label">عنوان</label>
    <input type="text" class="form-control" id="en_title" name="en[title]" value="" >
    @error('en.title')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>


  <div class="mb-3 col-7">
    <label for="en_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="en_description" name="en[description]" ></textarea>
    @error('en.description')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>

      
    



       </div>
  
  
  
  
  
</form>
<div class="col-12">
    <button class="btn btn-primary" type="submit">Registration</button>
  </div>
  <div class="col-12">
    <a class="btn btn-warning" href="#">Return</a>
  </div>

    </section>

</section>

@endsection