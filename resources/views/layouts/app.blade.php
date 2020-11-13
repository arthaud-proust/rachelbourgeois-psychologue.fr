<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="robots" content="all">
    <meta name="target" content="all">
    <meta name="author" content="Arthaud Proust">
    <meta name="owner" content="Rachel Bourgeois">
    <meta name="language" content="fr">

    <meta http-equiv="content-language" content="fr" />
    <meta name="url" content="rachelbourgeois.fr">
    <meta name="identifier-URL" content="rachelbourgeois.fr">
    <link rel="canonical" href="rachelbourgeois.fr" />

    <title>Rachel Bourgeois - Psychologue à Bordeaux</title>
    <meta name="subject" content="psychologue">
    <meta name="description" content="Mes compétences de psychologue clinicienne au service de votre bien-être et de votre santé psychique. Consultations Thérapeutiques: thérapie brève, thérapie de soutien, thérapie analytique, thérapie de couple. Ateliers: Art-thérapie, écriture autobiographique, relaxation et méditation." />
    <meta name="keywords" content="rachel, bourgeois, psycholoque, bordeaux">
    <meta name="theme-color" content="#176c83">

    <meta property="og:title" content="Rachel Bourgeois - Psychologue à Bordeaux" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Mes compétences de psychologue clinicienne au service de votre bien-être et de votre santé psychique. Consultations Thérapeutiques: thérapie brève, thérapie de soutien, thérapie analytique, thérapie de couple. Ateliers: Art-thérapie, écriture autobiographique, relaxation et méditation." />
    <meta property="og:site_name" content="Rachel Bourgeois" />
    <meta property="og:url" content="rachelbourgeois.fr" />
    <meta property="og:locale" content="fr" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Rachel Bourgeois - Psychologue à Bordeaux" />
    <meta name="twitter:description" content="Mes compétences de psychologue clinicienne au service de votre bien-être et de votre santé psychique. Consultations Thérapeutiques: thérapie brève, thérapie de soutien, thérapie analytique, thérapie de couple. Ateliers: Art-thérapie, écriture autobiographique, relaxation et méditation." />
    <meta name="twitter:site" content="rachelbourgeois.fr" />
    <meta name="twitter:image" content="" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Rachel Bourgeois - Psychologue à Bordeaux" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#176c83">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Rachel Bourgeois",
            "url": "rachelbourgeois.fr",
            "address": "489 Avenue du Maréchal de Lattre de Tassigny",
            "sameAs": [
                "",
                "",
                "",
                ""
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
