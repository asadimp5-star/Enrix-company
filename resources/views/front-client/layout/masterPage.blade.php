@include('front-client.layout.metaTag')

@include('front-client.layout.header')

<main>

    

    @yield('content')

    @include('front-client.layout.getInTouch')
</main>

@include('front-client.layout.footer')

@include('front-client.layout.scripts')