<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('front-client.layout.links')
    @php
    $seoTitle = $seo['title'] ?? 'Enrix Company';
    $seoDesc = $seo['description'] ?? 'Enrix helps early-stage startups in the Netherlands win Dutch and EU grants, design a clear grant roadmap and grow with go-to-market advice.';
    $seoKeywords = $seo['keywords'] ?? 'Grant advisor,Netherlands, Startup grant writing, grant roadmap, early-stage startup funding, funding';
    $seoCanonical = $seo['canonical'] ?? url()->current();
    $seoImg = $seo['image'] ?? asset('assets/company-image/content/istockphoto-153974885-1024x1024.png');
    @endphp

    <title>@yield('title-page','Entix International Company')</title>
    <meta name="title" content="{{ $seoTitle }}">
    <meta name="description" content="{{ $seoDesc }}">
    <meta name="keywords" content="{{ $seoKeywords }}">
    <meta name="image" content="{{ $seoImg }}">
    <link rel="canonical" href="{{ $seoCanonical }}">
    @yield('seo_schema');
</head>
@livewireStyles


<body  data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="100" tabindex="0" >
