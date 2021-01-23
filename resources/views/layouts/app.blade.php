<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rachel Bourgeois - Psychologue en Gironde</title>

    <meta name="robots" content="all">
    <meta name="target" content="all">
    <meta name="author" content="Arthaud Proust">
    <meta name="owner" content="Rachel Bourgeois">
    <meta name="language" content="fr">

    <meta http-equiv="content-language" content="fr" />
    <meta name="url" content="rachelbourgeois-psychologue.fr">
    <meta name="identifier-URL" content="rachelbourgeois-psychologue.fr">
    <link rel="canonical" href="rachelbourgeois-psychologue.fr" />

    <title>Rachel Bourgeois - Psychologue en Gironde</title>
    <meta name="subject" content="psychologue">
    <meta name="description" content="Mes compétences de psychologue clinicienne à Bordeaux au service de votre bien-être et de votre santé psychique - Rachel Bourgeois " />
    <meta name="keywords" content="rachel, bourgeois, psycholoque, bordeaux, gironde">
    <meta name="theme-color" content="#176c83">

    <meta property="og:title" content="Psychologue en Gironde" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Mes compétences de psychologue clinicienne à Bordeaux au service de votre bien-être et de votre santé psychique - Rachel Bourgeois " />
    <meta property="og:site_name" content="Rachel Bourgeois" />
    <meta property="og:url" content="rachelbourgeois-psychologue.fr" />
    <meta property="og:locale" content="fr" />
    <meta property="og:image" content="https://rachelbourgeois-psychologue.fr/assets/img/apple/apple-touch-icon-180x180.png" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Rachel Bourgeois - Psychologue en Gironde" />
    <meta name="twitter:description" content="Mes compétences de psychologue clinicienne à Bordeaux au service de votre bien-être et de votre santé psychique - Rachel Bourgeois " />
    <meta name="twitter:site" content="rachelbourgeois-psychologue.fr" />
    <meta name="twitter:image" content="https://rachelbourgeois-psychologue.fr/assets/img/apple/apple-touch-icon-180x180.png" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Rachel Bourgeois - Psychologue en Gironde" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#176c83">

    <!-- Apple meta -->
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}" />
    <link rel="apple-touch-icon" href="/assets/img/apple/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/apple/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/apple/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/apple/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/apple/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/apple/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple/apple-touch-icon-180x180.png" />

    <link rel="icon" href="/assets/img/favicon.ico">


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Rachel Bourgeois",
            "url": "rachelbourgeois-psychologue.fr",
            "address": "489 Avenue du Maréchal de Lattre de Tassigny",
            "sameAs": [
                "https://www.doctolib.fr/psychologue/bordeaux/rachel-bourgeois-bordeaux"
            ]
        }
    </script>


    <!-- Scripts -->
    @if (config('app.env') =='production')
        @foreach($requirementsJs as $requirement)
            <script src="{{ asset('js/'.$requirement.'.min.js') }}" defer></script>
        @endforeach

        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    @else
        @foreach($requirementsJs as $requirement)
            <script src="{{ asset('js/'.$requirement.'.js') }}" defer></script>
        @endforeach

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif


    <script>
    window.onload= function() {
        try {
            const url = "{{ asset('css/') }}"
            const requirementCss = [
                @foreach($requirementsCss as $requirement)
                "{{ $requirement }}",
                @endforeach
            ];
            for (let i=0; i<requirementCss.length; i++) {
                let link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = url+(window.screen.width<768?'/mobile-':'/large-')+requirementCss[i]+'.css';
                document.getElementsByTagName('head')[0].appendChild(link);
            }
            
        } catch (e) {}
    };
    </script>
    <noscript>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </noscript>
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        @yield('view')

        <footer>
            <a class="credit" href="https://arthaud.dev">Développé par <u>Arthaud Proust</u></a>
            <span class="copyright">&copy 2020 Tous droits réservés</span>
            <a class="admin" href="{{ route('login') }}"><u>Accès administrateur</u></a>
        </footer>
    </div>
</body>
</html>
