<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="Portal de Candidaturas das Forças Armadas Angolanas" />
    <meta name="description" content="Portal de Candidaturas das Forças Armadas Angolanas" />
    <meta name="keywords" content="Portal de Candidaturas das Forças Armadas Angolanas" />
    <meta name="author" content="grxnet.com" />
    <meta name="generator" content="LOMS.V4 by GRXnet.com" />

    <meta property="og:title" content="Forças Armadas Angolanas" />
    <meta property="og:site_name" content="Portal de Candidaturas das Forças Armadas Angolanas" />
    <meta property="og:description" content="Portal de Candidaturas das Forças Armadas Angolanas" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="fb:app_id" content="566775140416922" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.ico">

    <!-- CSS Files -->
    <link href="/site/css/faa.css" rel="stylesheet">
    <link href="/site/css/responsive.css" rel="stylesheet">
    <link href="/site/css/color.css" rel="stylesheet">
    <link href="/site/css/all.css" rel="stylesheet">
    <link href="/site/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/site/css/bootstrap.min.css" rel="stylesheet">
    <link href="/site/css/prettyPhoto.css" rel="stylesheet">
    <link href="/site/css/slick.css" rel="stylesheet">

    <!--Rev Slider Start-->
    <link rel="stylesheet" href="/site/js/js/rev-slider/css/settings.css" type='text/css' media='all' />
    <link rel="stylesheet" href="/site/js/js/rev-slider/css/layers.css" type='text/css' media='all' />
    <link rel="stylesheet" href="/site/js/js/rev-slider/css/navigation.css" type='text/css' media='all' />
    <!--Rev Slider End-->

    <style>
        @media(max-width: 767px) and (min-width:280px) {
            .hide-search {
                display: none;
            }

            .colmd8 {
                width: 45%;
            }

            .colmd4 {
                width: 55%;
            }
        }

        @media(min-width: 768px) {
            .hide-modlogos {
                display: none !important;
            }

            .colmd8 {
                width: 82%;
            }

            .colmd4 {
                width: 17%;
            }


        }

    </style>
    <title>@yield('titulo')</title>

    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>
</head>




<body>
