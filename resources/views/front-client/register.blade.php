<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="#">

    <title>registration</title>
</head>
<body class="d-flex  align-items-center py-4 bg-body-tertiary">
    
<main class="form-signin w-100 m-auto d-flex mt-5 justify-content-center"> 

<section class="justify-content-center">
        <x-manual.alert class="col-10">

        </x-manual.alert>


    </section>
    
<form class="col-lg-3 col-md-8 col-sm-6 mt-5" action="{{ route('registering') }}" method="post">
    @csrf
 <h1 class="mb-3 fw-normal  ">Fill out the form below</h1>
 <div class="form-floating mb-1"> 
<input type="text" class="form-control " id="floatingInput" name="name" placeholder="Enter your full name." value="{{ old('name') }}" required>
<label for="floatingInput ">Full name</label> 
@error('name')
    <div class="alert alert-danger mt-1">{{ $message }}</div>
@enderror
</div>
 <div class="form-floating mb-1"> 
<input type="email" class="form-control " id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
<label for="floatingInput ">Email address</label> 
@error('email')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
</div>
 <div class="form-floating mb-1">
 <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
 <label for="floatingPassword ">password</label>
 @error('password')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
 </div>
 <div class="form-floating mb-1">
 <input type="password" class="form-control" id="floatingPassword" name="password_confirmation" placeholder="confirm Password" required>
 <label for="password_confirmation ">confirm password</label>
 @error('password_confirmation')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
 </div> 
<button class="btn btn-primary w-100 py-2 sahel" type="submit">register</button>
<div class="d-flex justify-content-between mt-2">
  <a href="{{ route('home') }}" class="btn btn-info sahel">HOME</a>
</div>
 <p class="mt-5 mb-3 text-body-secondary">© 2017–2025</p> 
</form>
  

    
  
</main>





<script src="{{asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>





