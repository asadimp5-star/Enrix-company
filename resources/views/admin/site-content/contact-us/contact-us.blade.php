@extends('admin.layout.master-page')

@section('title','Content management')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="#">Content management</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">Contact us</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Contact us')

@section('content')


<section class="m-5">
    
    <section>
    <form class="row g-3 yekan" action="{{ route('admin.content.contact-us.store') }}" method="post" enctype="multipart/form-data">
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

        <div class="col-md-4">
    <label for="fa_co_adress" class="form-label">آدرس شرکت</label>
    <input type="text" class="form-control" id="fa_co_adress" name="fa[co_adress]" value="#" >
  </div>
  <div class="col-md-4">
    <label for="img" class="form-label">تصویر</label>
    <input class="form-control" type="file" id="img" name="img">
  </div>

  <div class="mb-3 col-md-6">
    <label for="fa_factory_adress" class="form-label">آدرس کارگاه</label>    
    <input type="text" class="form-control" id="fa_factory_adress" name="fa[factory_adress]" value="#">

  </div>

  <div class="col-md-4">
    <label for="img1" class="form-label">تصویر1</label>
    <input class="form-control" type="file" id="img1" name="img1">
  </div>

  <div class="mb-3">
    <label for="fa_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="fa_description" name="fa[description]" placeholder="توضیحات را اینجا وارد کنید"></textarea>
  </div>

  <div class="col-md-4">
    <label for="fa_phone" class="form-label">تلفن</label>
    <input type="tel" class="form-control" id="fa_phone" name="fa[phone]">
  </div>

  <div class="col-md-4">
    <label for="fa_phone1" class="form-label">1 تلفن</label>
    <input type="tel" class="form-control" id="fa_phone1" name="fa[phone1]">
  </div>

  <div class="col-md-4">
    <label for="fa_email" class="form-label">ایمیل</label>
    <input type="email" class="form-control" id="fa_email" name="fa[email]">
  </div>


       </div>

       <div class="tab-pane fade" id="nl">

          <div class="col-md-4">
    <label for="en_co_adress" class="form-label">آدرس شرکت</label>
    <input type="text" class="form-control" id="en_co_adress" name="en[co_adress]" value="# >
  </div>
  

  <div class="mb-3 col-md-6">
    <label for="en_factory_adress" class="form-label">آدرس کارگاه</label>    
    <input type="text" class="form-control" id="en_factory_adress" name="en[factory_adress]" value="#">

  </div>


  <div class="mb-3">
    <label for="en_description" class="form-label">توضیحات</label>
    <textarea class="form-control" id="en_description" name="en[description]" placeholder="توضیحات را اینجا وارد کنید"></textarea>
  </div>

  <div class="col-md-4">
    <label for="en_phone" class="form-label">تلفن</label>
    <input type="tel" class="form-control" id="en_phone" name="en[phone]">
  </div>

  <div class="col-md-4">
    <label for="en_phone1" class="form-label">1 تلفن</label>
    <input type="tel" class="form-control" id="en_phone1" name="en[phone1]">
  </div>

  <div class="col-md-4">
    <label for="en_email" class="form-label">ایمیل</label>
    <input type="email" class="form-control" id="en_email" name="en[email]">
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