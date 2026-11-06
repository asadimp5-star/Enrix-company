@extends('admin.layout.master-page')

@section('title','Content management')

@section('conten','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page"><a class="text-decoration-none" href="#">Content management</a></li>

    <li class="breadcrumb-item p-1 active" aria-current="page">Gallery Management</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','Gallery Management')

@section('content')

<section class="mt-5" style="margin:1rem;">
    <section >
      <div class="container-fluid col-lg-2 col-md-12  float-end bg-success rounded-3 text-center "style="margin-right:1rem;">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">لیست تصاویر</h6></div>
            </div>
    
    </div>
    <a href="#">
      <div class="container-fluid col-lg-2 col-md-12  float-start bg-primary rounded-3 text-center"style="margin-left:1rem;">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">افزودن عکس جدید</h6></div>
            </div>
    
      </div>
    </a>
    </section>
<table class="table table-striped table-hover">
  <thead>
    <tr class="shabnam fs-6">
      <th scope="col">#</th>
      <th scope="col">عنوان</th>
      <th scope="col">خلاصه</th>
      <th scope="col">عکس</th>
      <th scope="col">تاریخ</th>
      <th scope="col">وضعیت</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
  
  </tbody>
</table>
</section>
</section>
<div class="col-12">
    <a class="btn btn-warning" href="#">Return</a>
</div>

@endsection