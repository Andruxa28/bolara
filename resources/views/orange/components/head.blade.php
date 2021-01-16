<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#003459">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta property="og:title" content="@yield('og_title')">
    <meta property="og:description" content="@yield('og_description')">
    <meta property="og:image" content="{{asset ('assets/orange/img/og.jpg')}}">
    <meta property="og:url" content="{{env('APP_URL')}}">
    <link rel="canonical" href="{{env('APP_URL')}}">
    <link rel="alternate" hreflang="ru" href="{{env('APP_URL')}}">
    <link rel="alternate" hreflang="uk" href="{{env('APP_URL')}}/uk">
    <link rel="shortcut icon" href="{{asset ('assets/orange/img/favicon.png')}}" type="image/x-icon">
    <link rel="preload" href="{{asset ('assets/orange/fonts/days.ttf')}}" as="font" crossorigin="">
    <link rel="preload" href="{{asset ('assets/orange/fonts/boxicons.woff2')}}" as="font" crossorigin="">
    <link rel="preload" href="{{asset ('assets/orange/fonts/boxicons.ttf')}}" as="font" crossorigin="">
    <link rel="preload" href="{{asset ('assets/orange/fonts/boxicons.svg')}}" as="font" crossorigin="">
    <link rel="stylesheet" href="{{asset ('assets/orange/css/style.css')}}">
    <script type="application/ld+json">{"@context" : "http://schema.org","@type" : "Organization","name" : "BigOrange","url" : "{{env('APP_URL')}}","description" : "","logo" : "{{env('APP_URL')}}/img/paydayme.com-logo.jpg","sameAs" : [ "https://www.youtube.com/channel/UCQxiAfc2PKOX2a14SsO9NnA"]}</script>
</head>