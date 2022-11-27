<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snel-app</title>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ secure_asset('img/snel.png') }}">
    <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss'])
</head>
<body>
    @if(!Route::is('login'))
        <header class="header">
            <div class="div-logo">
                <img class="logo-img" src="{{ secure_asset('img/snel.png') }}" alt="{{ __('') }}">
                <p style="font-size: 30px;font-weight: 700">Snel</p>
            </div>
            <div class="div-profil">
                <a href="{{ route('login') }}">
                    <img class="profil" src="{{ secure_asset('img/profil.JPG') }}" alt="">
                </a>
            </div>
        </header>
    @endif
    <main class="main">
        @yield('main')
    </main>
    <script type="text/javascript" src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</body>
</html>
