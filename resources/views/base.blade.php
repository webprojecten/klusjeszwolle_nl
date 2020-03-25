<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="header">
        <div class="container flex-end">
            <div id="logo" class="primair">
                Klusjes<span id="logo-zwolle">Zwolle</span>.nl
            </div>
            <nav id="nav">
                <ul id="nav-links">
                    <div class="sidebar-close" onclick="closeNav()">&times;</div>
                    <div id="logo-sidebar" class="primair">
                        Klusjes<span id="logo-zwolle">Zwolle</span>.nl
                    </div>
                    <li><a href="{{ asset('#') }}">Home</a></li>
                    <li><a href="{{ asset('#') }}">Klussen in Zwolle</a></li>
                    <li><a href="{{ asset('#') }}">Diensten</a></li>
                    <li><a href="{{ asset('#') }}" id="nav-offerte">Offerte Aanvragen</a></li>
                </ul>
            </nav>
            <div id="hamburger-icon">
                <img src="{{ asset('img/hamburger-icon.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div id="header-buffer"></div>
    @yield('content')
    <footer>
        <div class="container">
            @ 2020
        </div>
    </footer>
    <script src="{{ asset('js/js_events.js') }}"></script>
</body>
</html>