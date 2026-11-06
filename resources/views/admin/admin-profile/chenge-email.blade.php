@extends('admin.layout.master-page')

@section('title','Edit email')

@section('seting','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1" aria-current="page"><a class="text-decoration-none" href="#">Edit email</a></li>
    <li class="breadcrumb-item p-1 active" aria-current="page">Change email</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Change email')

@section('content')
<section class="container-fluid d-flex justify-content-center">
    <section class="col-6 row mt-5">
      <form action="#" class="col-9 shabnam mt-3" method="post">
        @csrf
        @method('PUT')

    <div >
    <label  class="form-label fs-3">Change email</label>
    <div class="col-md-6 col-lg-8 col-sm-11">
    <label for="email" class="form-label">New email</label>
    <input type="email" class="form-control" name="email" required>
    @error('email')
       <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
  </div>
  
    <div class="col-12">
    <button class="btn btn-primary mt-1" type="submit">Registration</button>
    </div>
  </form>
    <a class="btn btn-warning mt-3" href="#">Return</a>

    </section>
</section>


@endsection