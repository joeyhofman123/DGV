<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Verbind u bedrijf met duizenden verk zoekenden bij Powerjobs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-primary-blue">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                     <a class="nav-link mr-2" href="{{route('dashboard.teksten.alle')}}">alle teksten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="{{route('dashboard.teksten.langste')}}">langste tekst</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="{{route('dashboard.teksten.kortste')}}">kortste tekst</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mr-2" href="{{route('dashboard.teksten.recent')}}">meest recente tekst</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="{{route('dashboard.teksten.allewoorden')}}">Alle Woorden</a>
                    </li>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Statistieken
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Minste gebruikt tekens</a>
                            <a class="dropdown-item" href="#">Meeste gebruikt tekens</a>
                        </div>
                 </ul>
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                     <a class="w-100 text-white btn btn-success mr-2" href="{{ route('dashboard.teksten.create') }}">Tekst toevoegen</a>

                    </li>

                 </ul>

                </div>
                </div>
            </div>
        </nav>

        <main class="my-5 py-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
