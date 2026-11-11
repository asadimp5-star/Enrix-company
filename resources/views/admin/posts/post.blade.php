@extends('admin.layout.master-page')

@section('title','Articles')

@section('pos','active')

@section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">List of Articles</li>
  </x-slot>
</x-manual.page-curent>
@endsection

@section('page-name','List of Articles')

@section('content')

<section class="mt-5" style="margin:1rem;">
    
    <section class=" mb-5">
      <form class="form-inline d-flex justify-content-center my-2 my-lg-0 col-lg-4 col-md-8 " action="{{ route('admin.resorces.search-post') }}" method="get">
        @csrf
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="searching..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">search</button>
    </form>
    </section>

    <section >
      <div class="container-fluid col-lg-2 col-md-12  float-end bg-success rounded-3 text-center "style="margin-right:1rem;">
            <div>
                <div class="p-3"><h6 class="shabnam" style="color: antiquewhite;">List of Articles</h6></div>
            </div>
    
    </div>
    <a href="{{ route('admin.resorces.create') }}">
      <div class="container-fluid col-lg-2 col-md-12  float-start bg-primary rounded-3 text-center"style="margin-left:1rem;">
            <div>
                <div class="p-3"><h6 class=" shabnam" style="color: antiquewhite;">Add new article</h6></div>
            </div>
    
      </div>
    </a>
    </section>
    
    
    
    <table class="table table-striped table-hover">
  <thead>
    <tr class="shabnam fs-6">
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">Summary</th>
      <th scope="col">Date</th>
      <th scope="col">Aouther</th>
      <th scope="col">Status</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    
  <tbody>
    @forelse($posts as $post)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ substr($post->translations->where('locale','en')->first()?->title?? 'none title',0,15)}}</td>
      <td>{{ substr($post->translations->where('locale','en')->first()->summery??'',0,30).'...' }}</td>
      <td>{{ $post->created_at }}</td>
      <td>{{ $post->aouther }}</td>
      <td><span class="badge {{ $post->status== 1 ? 'bg-success' : 'bg-danger' }}">
            {{ $post->status== 1 ? 'Activ' : 'Inactiv'}}
      </span></td>
      <td>
        <section class="d-flex">

                                <form class="mt-1" action="{{ route('admin.resorces.status',$post->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-success ">Change of status</button>
                                </form>


                                <form action="{{ route('admin.resorces.delet',$post->id) }}" method="post">
                                 @csrf
                                 @method('DELETE') 
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger m-1">Delete</button>
                                </form>
                                
                                <a href="{{ route('admin.resorces.edite',$post->id) }}" class="btn btn-outline-primary m-1">View and edit</a>
                                
                              </section>
                              
      </td>
    </tr>
    @empty
    <h6 class="d-flex justify-content-center fs-5 text-danger">There is no article</h6>
    @endforelse
  </tbody>
</table>
<div class="col-3 pe-5">{{ $posts->links() }}</div>
</section>


@endsection