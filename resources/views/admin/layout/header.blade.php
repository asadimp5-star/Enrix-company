

<header class="container-fluid bg-body-secondary rounded-5 col-8">
      
    
        <section class="pt-2">
          <h5 class="TimesRoman card border-success rounded-4 p-1 text-center">Enrix International company management panel </h5>
        </section>

        
        <section class="d-flex">
            
            <section class="col-4">
                    <a href="#" class="text-decoration-none d-flex align-items-center">
                        <img  src="#" class="img-thumbnail " alt="image logo" width="90" height="60">     
                        <h3 class="mt-1 ">Enrix</h3>
                    </a>

            </section>

            <section class="col-lg-9 col-md-9">
            <nav class="navbar navbar-expand-xl navbar-dark rounded-5 bg-success  col-sm-8  col-md-10" aria-label="Sixth navbar example">
                <div class="container-fluid gap-5">
                                        <a class="navbar-brand TimesRoman @yield('hom')" href="#">Home page</a>
                                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"         data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarsExample06">
                            <ul class="navbar-nav me-auto  mb-2 mb-xl-0">
                                <li class="nav-item"> 
                                    <a class="nav-link TimesRoman @yield('pos')" aria-current="page" href="#">Resorces</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link TimesRoman @yield('frequ')" href="#">FAQ</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link TimesRoman @yield('custo')" href="#">customers</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link TimesRoman @yield('conten')" href="#">Content management</a>
                                </li>
                                <li class="nav-item dropdown "> 
                                    <a class="nav-link dropdown-toggle TimesRoman @yield('seting')" href="#" data-bs-toggle="dropdown" aria-expanded="false">setting</a>
                                <ul class="dropdown-menu"> 
                                    <li>
                                        <a class="dropdown-item TimesRoman" href="#">Edit profile</a>
                                    </li> 
                                    <li>
                                        <form action="#" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item TimesRoman">Exit</a>
                                        </form>
                                        
                                    </li>
                                    
                                </ul>
                                </li> 
                            </ul>

                        </div>

                </div>
            </nav>

            

            </section>
            

        </section>

    </header>
    <section>
        <section class="mt-1 container-fluid">
            <div class="card bg-body-secondary rounded-0 border-end-0 border-start-0">
                <div class="card-body container-fluid">
                    <div class="d-flex justify-content-between end-100">
                        
                        
                        <h4 class="TimesRoman">Hello...</h4>
                        @yield('curent-page')

                    </div>
                        
                    
               
                   

                </div>
            </div>
        </section>
        <section class="mt-1 col-5 container-fluid">
            <div class="card bg-body-tertiary rounded-0 border-0">
                <div class="card-body container-fluid col-lg-4 col-md-6 col-sm-12  border border-success rounded-5 text-center">
                <h4 class="yekan" >@yield('page-name')</h4>   
                
                </div>
            </div>
        </section>
    </section>



    <!-- @section('curent-page')
<x-manual.page-curent>
  <x-slot>
    <li class="breadcrumb-item p-1 active" aria-current="page">لیست کالاها</li>
  </x-slot>
</x-manual.page-curent>
@endsection -->