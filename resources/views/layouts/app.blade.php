<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snel-app</title>
    @vite(['resources/sass/app.scss'])
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ secure_asset('img/snel.png') }}">
    <link rel="manifest" href="{{ secure_asset('/manifest.json') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    @if(!Route::is('login'))
        <header class="header">
            <div class="div-logo">
                <img class="logo-img" src="{{ asset('img/snel.png') }}" alt="{{ __('') }}" style="height: 50px" width="50px" >
                <h1 style="font-size: 1.5em">Snel</h1>
            </div>
            <div class="div-profil">
                <span class="name">dieudonne</span>
                <a href="{{ route('login') }}">
                    <img class="profil" src="{{ secure_asset('img/profil.JPG') }}" alt="">
                </a>
            </div>
        </header>
    @endif
    <main class="main">
        @yield('main')
    </main>
    <script src="{{ secure_asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
</body>
</html>
