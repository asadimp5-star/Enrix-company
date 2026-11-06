@extends('admin.layout.master-page')

@section('title','Edit profile')

@section('seting','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">Edit profile</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Edit profile')

@section('content')

<section class="d-flex col-lg-10 col-md-9 col-sm-11 row m-5">
  <section class="justify-content-between shabnam m-5">
    <section class="d-flex ">
      <div class="col-md-4 m-5">
    <label  class="form-label">First Name</label>
    <h4></h4>
  </div>
  <div class="col-md-4 m-5">
    <label  class="form-label">Last Name</label>
    <h4></h4>
  </div>
    </section> 
    <section class="d-flex">
      <div class="col-md-4 m-5">
    <label class="form-label">email address</label>
    <h4></h4>
    
  </div>

    </section>
  
  
  
  
 

</section>
<section class="d-flex justify-content-center row">
  <hr>
  <section class="d-flex justify-content-between col-lg-5 col-md-7 col-sm-9 m-5">

  <div>
  <a href="#" class="btn btn-info sahel">Change password</a>

  </div>
  <div>
  <a href="#" class="btn btn-info sahel">Change email address</a>
  

  </div>


</section>

</section>
</section>
  

@endsection