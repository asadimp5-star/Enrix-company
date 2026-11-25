<header data-dc-tpl="4">
<div data-dc-tpl="5" class="headerdiv">
<div data-dc-tpl="6" class="headerdiv1">
<a href="{{ route('home') }}" class="headerdiv1">
<img src="{{ asset('assets/company-image/slider/Untitled design (2).png') }}" alt="enrix logo" class="img-thumbnail " width="60" height="60">
ENRIX 
</a>
</div>
<nav data-dc-tpl="8" aria-label="Main" >
<a data-dc-tpl="9" href="{{ route('home') }}" class="navItem @yield('HOM')">{{ __('content.home') }}</a>
<a data-dc-tpl="9" href="{{ route('services') }}" class="navItem @yield('Servi')">{{__('content.Services')}}</a>
<a data-dc-tpl="10" href="{{ route('partners') }}" class="navItem @yield('partn')">{{__('content.For partners')}}</a>
<a data-dc-tpl="11" href="{{ route('about') }}" class="navItem @yield('Abou') ">{{ __('content.About') }}</a>
<a data-dc-tpl="12" href="{{ route('resorces') }}" class="navItem @yield('Resou')">{{ __('content.Resources') }}</a>
<a data-dc-tpl="13" href="{{ route('contact') }}" class="navItem @yield('Conta')">{{ __('content.Contact') }}</a>
</nav>
<div data-dc-tpl="14" class="headerdiv2">
<span data-dc-tpl="15" style="font-size: 14px; font-weight: 600;">
    @php
      $segment = request()->segments();
      if(in_array($segment[0]??'',['en','nl'])){
      array_shift($segment);
      }
        $path = implode('/',$segment);
        
        $curentLang = request()->segment(1) ?? 'en';
     
    @endphp
<a data-dc-tpl="16" href="{{ url('/en/' . $path) }}" style="color: #C9A66B;"
class="{{ $curentLang == 'en' ? 'lang-activ' : '' }}" >EN</a>
<span class="text-light">|</span>     
<a data-dc-tpl="16" href="{{ url('/nl/' . $path) }}" style="color: #C9A66B;"
class="{{ $curentLang == 'nl' ? 'lang-activ' : '' }}">NL</a>
</span>
<a data-dc-tpl="17" href="{{ route('services') }}#FAQs" class="getInTouch">FAQ</a>
</div>
</div>
</header>