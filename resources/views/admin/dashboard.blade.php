@extends('admin.layout.master-page')

@section('title','Admin Panel')



@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    
  </x-slot>
</x-manual.page-curent>

@endsection

@section('content')

 @section('page-name','Home page')

   
<section>
 <section class="text-center container-fluid  col-lg-10 col-md-11">

     <table class="table table-striped table-hover">
      <div class="container-fluid  col-lg-2 col-md-2 mb-2 float-start right bg-success rounded-3 text-center">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">messages</h6></div>
            </div>
    
    </div>
  <thead>
    <tr class="timesRoman fs-6">
      <th scope="col">#</th>
      <th scope="col">Name </th>
      <th scope="col">Email </th>
      <th scope="col">Company or organisation</th>
      <th scope="col">I am a… </th>
      <th scope="col">What is it about?</th>
      <th scope="col">Date</th>
      <th scope="col">Opration</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($messages as $message)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $message->name }}</td>
      <td>{{ $message->email }}</td>
      <td>{{ $message->company }}</td>
      <td>{{ ['Startup','Accelerator / startup hub','Other'][$message->i_am] ?? '-'}}</td>
      <td>{{ ['grant writing','strategic advisory','partnership','something else'][$message->What_is_it_about] ?? '-'}}</td>
      <td>{{ $message->created_at }}</td>
      <td>
        <section class="d-flex">
          <form action="#" method="post">
          @csrf
          <button type="submit" class="btn btn-outline-info mt-1">مشاهده پیام</button>
        </form>

        <form action="#" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('مطمئنی؟')" class="btn btn-outline-danger m-1">حذف</button>

        </form>     

      </section>
        
      </td>
    </tr>
    @empty
    <h6>پیامی وجود ندارد</h6>
    @endforelse
    
  </tbody>
    </table> 


  
    
<div class="col-3 pe-5"></div>

</section>

</section>



@endsection


