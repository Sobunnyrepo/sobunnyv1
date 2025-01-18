<!DOCTYPE html>
<html lang="{{get_user_lang()}}" dir="{{get_user_lang_direction()}}">
<head>
    {!! renderHeadStartHooks() !!}
    <meta name="keywords" content="luxury escorts Miami, discreet dates New York, premium companions Los Angeles, luxury dates Las Vegas, escort agency Chicago, high-end escorts Washington DC, luxury companions USA, premium escort services, VIP escort agency, high-class companions, upscale escorts USA, luxury dating services, elite escort girls, confidential escort services, top escorts for high-end dates, upscale escort girls in USA, professional luxury escorts, exclusive dating experiences, private escort agency, best escort girls USA, discreet luxury companions, high-end escort booking">
<meta name="robots" content="index, follow">
<meta name="classification" content="adult entertainment">
<meta name="rating" content="adult">
<meta name="author" content="sobunny USA">
<meta name="google" content="notranslate">
<meta name="Distribution" content="Global">
<meta name="googlebot" content="index, follow">
<meta name="googlebot" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<link rel="canonical" href="https://www.sobunny.com">
<meta property="og:title" content="Luxury Escorts Services in USA">
<meta property="og:description" content="Top-tier luxury escort services in major cities across the USA. Discreet dates and premium companions.">
<meta property="og:image" content="URL-to-your-image.jpg">
<meta name="description" content="Exclusive luxury escort services in Miami, New York, Los Angeles, Las Vegas, Chicago, Washington DC, Atlanta, Boston, Austin, San Francisco, Philadelphia, Dallas. Find discreet dates and premium companions for unique experiences in these cities.">
    
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11560117755">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11560117755');
</script>
   <!-- Event snippet for Vista de una página conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-11560117755/_G_eCJeg2IsaEPvLpYgr',
      'value': 1.0,
      'currency': 'COP'
  });
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Luxury Escorts in the USA – Sobunny: Your Platform for Exclusive Escort Experiences</title>
    {!! render_favicon_by_id(get_static_option('site_favicon')) !!}
     @include('frontend.layout.partials.custom-font')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugin.css') }}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/new-css-add.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/dynamic-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/helpers.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/common/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.ihavecookies.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/main.css')}}">

    @if(get_user_lang_direction() == 'rtl')
        <link rel="stylesheet" href="{{asset('assets/common/css/rtl.css')}}">
    @endif

    <link rel="canonical" href="{{canonical_url()}}" />
    @include('frontend.layout.partials.root-style')

    <!-- page css -->
    @yield('style')

    @if(request()->routeIs('homepage'))
        <title>{{get_static_option('site_title')}} - {{get_static_option('site_tag_line')}}</title>
        {!! render_site_meta() !!}
    @elseif( request()->routeIs('frontend.dynamic.page') && $page_type === 'page' )
        {!! render_site_title(optional($page_post)->title ) !!}
        {!! render_site_meta() !!}
    @else
        <title>@yield('site_title')</title>
    @endif
    {!! renderHeadEndHooks() !!}
    @if(!empty(get_static_option('site_third_party_tracking_code')))
        {!! get_static_option('site_third_party_tracking_code') !!}
    @endif
 
</head>
<body class="new-style">
{!! renderBodyStartHooks() !!}
@include('frontend.layout.partials.notice')

<style>
    html {  
        background: black !important;
    }
</style>