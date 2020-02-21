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
            <nav>
                <ul id="nav-links">
                    <li><a href="{{ asset('#') }}">Home</a></li>
                    <li><a href="{{ asset('#') }}">Klussen in Zwolle</a></li>
                    <li><a href="{{ asset('#') }}">Contact</a></li>
                </ul>
            </nav>
            <div id="hamburger-icon">
                <img src="{{ asset('img/hamburger-icon.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div id="header-buffer"></div>
    <div class="container">
        <div id="call-to-action">
            <div id="cta-voordelen">
                <h2>Voordelen van klusjeszwolle.nl</h2>
                <div id="voordelen-lijst">
                    <ul>
                        <li>Snel klaar!</li>
                        <li>Goede prijs</li>
                        <li>Alles netjes afgewerkt</li>
                        <li>Geen gezeik achteraf</li>
                        <li>100% tevreden</li>
                    </ul>
                    <a href=""><button>Offerte aanvragen</button></a>
                </div>
            </div>
            <div id="cta-image">
                <div id="cta-tekst">
                    <h2>Klussenbedrijf nodig?</h2>
                    <h2>Wij kunnen u helpen</h2>
                    <h2>Ook spoed mogelijk</h2>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/js_events.js') }}"></script>
</body>
</html>