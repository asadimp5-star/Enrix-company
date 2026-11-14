<header data-dc-tpl="4">
<div data-dc-tpl="5" class="headerdiv">
<div data-dc-tpl="6" class="headerdiv1">
<a href="{{ route('home') }}" class="headerdiv1">
<img src="#" alt="enrix logo">
ENRIX 
</a>
</div>
<nav data-dc-tpl="8" aria-label="Main" >
<a data-dc-tpl="9" href="{{ route('home') }}" class="navItem @yield('HOM')">HOME</a>
<a data-dc-tpl="9" href="{{ route('services') }}" class="navItem @yield('Servi')">Services</a>
<a data-dc-tpl="10" href="{{ route('partners') }}" class="navItem @yield('partn')">For partners</a>
<a data-dc-tpl="11" href="{{ route('about') }}" class="navItem @yield('Abou') ">About</a>
<a data-dc-tpl="12" href="{{ route('resorces') }}" class="navItem @yield('Resou')">Resources</a>
<a data-dc-tpl="13" href="{{ route('contact') }}" class="navItem @yield('Conta')">Contact</a>
</nav>
<div data-dc-tpl="14" class="headerdiv2">
<span data-dc-tpl="15" style="font-size: 14px; font-weight: 600;">
<a data-dc-tpl="16" href="#" style="color: #C9A66B;">EN |</a>     
<a data-dc-tpl="16" href="#" style="color: #C9A66B;">NL</a>
</span>
<a data-dc-tpl="17" href="{{ route('services') }}#FAQs" class="getInTouch">FAQ</a>
</div>
</div>
</header>