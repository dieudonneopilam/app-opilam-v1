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
    @vite(['resources/sass/app.scss','resources/js/app'])
</head>
<body>
    @if(!Route::is('login'))
        <header class="header">
            <div class="div-logo">
                <img class="logo-img" src="{{ secure_asset('img/snel.png') }}" alt="{{ __('') }}">
                <p style="font-size: 30px;font-weight: 700">Snel</p>
            </div>
            <div class="div-profil">
                <div class="div-pro">
                    <span href="#" class="div-profil">
                        <span>{{ auth()->user()->name }}</span>
                        <img class="profil profil-logout" src="{{ Storage::url(auth()->user()->file) }}" alt="">
                    </span>

                </div>
                <div class="logout-menu">
                    {{-- <p class="title">votre profil</p> --}}
                    <ul>
                        <li class="p"><img class="profil" src="{{ Storage::url(auth()->user()->file) }}" alt=""></li>
                        <li class="p">{{ auth()->user()->name }}</li>
                        <li class="p">{{ auth()->user()->email }}</li>
                        <li class="p logoutuser">
                            <a onclick="document.getElementById('logout-form').submit()" style="background-color: rgba(255, 255, 255, 0)" href="#">
                                <form style="background-color: rgba(255, 255, 255, 0)" action="{{ route('logout') }}" method="POST" id="logout-form">@csrf
                                    logout
                                </form>
                            </a>
                        </li>
                        <li class="p close"><a href="#">close</a></li>
                    </ul>
                </div>
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
