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
                    <li><a href="{{ asset('/klussen-zwolle') }}">Klussen Zwolle</a></li>
                    <li><a href="{{ asset('#') }}" class="sub-menu-link" id="diensten-nav-item">Diensten</a></li>
                    <li><a href="{{ asset('#') }}" id="nav-offerte">Offerte Aanvragen</a></li>
                </ul>
            </nav>
            <div id="hamburger-icon">
                <img src="{{ asset('img/hamburger-icon.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div id="header-buffer"></div>
    <div id="dropdown-diensten-item" class="dropdown-menu-item dmi-resp">
        <div class="close-dd-nav" id="close-dd-nav">&times;</div>
        <div class="dd-menu-content dd-single">
            <div class="dd-groep">
                <ul>
                    <li><a href="{{ asset('/badkamer-verbouwen') }}">BADKAMER VERBOUWEN</a></li>
                    <li><a href="{{ asset('/keuken-verbouwen') }}">KEUKEN VERBOUWEN</a></li>
                    <li><a href="{{ asset('/dak-onderhouden') }}">DAK ONDERHOUDEN</a></li>
                    <li><a href="{{ asset('/electronica-onderhouden') }}">ELECTRONICA ONDERHOUDEN</a></li>
                    <li><a href="{{ asset('/vloer-leggen') }}">VLOER LEGGEN</a></li>
                    <li><a href="{{ asset('/woonkamer-verbouwen') }}">WOONKAMER VERBOUWEN</a></li>
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
    <footer>
        <div class="container">
            @ 2020
        </div>
    </footer>
    <script src="{{ asset('js/js_events.js') }}"></script>
</body>
</html>