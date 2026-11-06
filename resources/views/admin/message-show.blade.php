@extends('admin.layout.master-page')

@section('title','Admin Panel')



@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    
  </x-slot>
</x-manual.page-curent>

@endsection

@section('content')

 @section('page-name','View message')

<section class="m-5">
    
    <section>
        @forelse($messages as $message)
    <form class="row g-3 TimesRoman">
        @csrf
  <div class="col-md-4">
    <label  class="form-label fs-5">Name</label>
    <h6 class="fs-6">{{ $message->name }}</h6>
  </div>
  <div class="col-md-4">
    <label  class="form-label fs-5">Email</label>
    <h6 class="fs-6">{{ $message->email }}</h6>
  </div>
  <div class="col-md-4">
    <label  class="form-label fs-5">Company or organisation</label>
    <h6 class="fs-6">{{ $message->company }}</h6>
  </div>
  <hr>
  <div class="col-md-4">
    <label  class="form-label fs-5">I am a…</label>
    <h6 class="fs-6">{{ ['Startup','Accelerator / startup hub','Other'][$message->i_am] ?? '-'}}</h6>
  </div>

  <div class="col-md-4">
    <label  class="form-label fs-5">What is it about?</label>
    <h6 class="fs-6">{{ ['grant writing','strategic advisory','partnership','something else'][$message->What_is_it_about] ?? '-'}}</h6>
  </div>
  
  <div class="mb-3 mt-5">
    <label class="form-label fs-5">Message</label>
    <p class="fs-6">{{ $message->message }}</p>
  </div>
  <div class="col-md-4 fs-5">
    <label  class="form-label">Date</label>
    <h6 class="fs-6">{{ $message->created_at }}</h6>
  </div>
  @empty
         <div>
            <h5 colspan="3">There are no comments.</h5>
         </div>
                
        
    @endforelse
                    

  
  <div class="col-12">
    <a class="btn btn-warning" href="{{ route('/admin') }}">Return</a>
  </div>
</form>
    </section>

</section>


@endsection