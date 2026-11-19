<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="#">

    <title>Member login</title>
</head>
<body class="d-flex  align-items-center py-4 bg-body-tertiary">
    
<main class="form-signin w-100 m-auto d-flex mt-5 justify-content-center"> 

<section class="justify-content-center">
        <x-manual.alert>

        </x-manual.alert>


    </section>
    
<form class="col-lg-3 col-md-8 col-sm-6 mt-5" action="{{ route('getIn') }}" method="post">
    @csrf
 <h1 class="mb-3 fw-normal st">Member login</h1>
 <div class="form-floating mb-1"> 
<input type="email" class="form-control " id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
<label for="floatingInput sahel">Email address</label> 
@error('email')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
</div>
 <div class="form-floating mb-1">
 <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
 <label for="floatingPassword sahel">password</label>
 @error('password')
          <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
 </div> 
<button class="btn btn-primary w-100 py-2 sahel" type="submit">Enter</button>
<div class="d-flex justify-content-between mt-2">
  <a href="{{ route('home') }}" class="btn btn-info sahel">Home</a>
  <a href="{{ route('emailConfirm') }}" class="link-info link-underline-light shabnam">I forgot my password.</a>
</div>
 <p class="mt-5 mb-3 text-body-secondary">© 2017–2025</p> 
</form>
  

    
  
</main>





<script src="{{asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>





