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
    <div class="container" id="content-wrapper">
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
        <h1 class="primair">KlusjesZwolle.nl: wij staan dag en nacht klaar voor al uw klussen in Zwolle</h1>
        <div class="icons">
            
        </div>
        <div class="content">
            <img src="{{ asset('/img/klusjes-in-zwolle.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">
            <article>
                <h2 class="primair">Klussenbedrijf in Zwolle zoeken?</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos neque voluptatem sequi totam nam laudantium at reprehenderit labore repellat, numquam debitis ipsam necessitatibus repudiandae, voluptas nisi consectetur explicabo corrupti quia facere natus fuga velit omnis odit mollitia. Magnam sunt, eveniet porro aperiam, molestias aliquid cupiditate possimus architecto unde esse corrupti.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos neque voluptatem sequi totam nam laudantium at reprehenderit labore repellat, numquam debitis ipsam necessitatibus repudiandae, voluptas nisi consectetur explicabo corrupti quia facere natus fuga velit omnis odit mollitia. Magnam sunt, eveniet porro aperiam, molestias aliquid cupiditate possimus architecto unde esse corrupti.
                </p>
            </article>
        </div>
        <div class="content">
            <article>
                <h2 class="primair">Klussenbedrijf in Zwolle zoeken?</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos neque voluptatem sequi totam nam laudantium at reprehenderit labore repellat, numquam debitis ipsam necessitatibus repudiandae, voluptas nisi consectetur explicabo corrupti quia facere natus fuga velit omnis odit mollitia. Magnam sunt, eveniet porro aperiam, molestias aliquid cupiditate possimus architecto unde esse corrupti.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos neque voluptatem sequi totam nam laudantium at reprehenderit labore repellat, numquam debitis ipsam necessitatibus repudiandae, voluptas nisi consectetur explicabo corrupti quia facere natus fuga velit omnis odit mollitia. Magnam sunt, eveniet porro aperiam, molestias aliquid cupiditate possimus architecto unde esse corrupti.
                </p>
            </article>
            <img src="{{ asset('/img/klusjes-in-zwolle.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">

        </div>
        <!-- <h2 class="primair">Voorbeelden klussen in Zwolle</h2> -->
        <div id="mogelijkheden">
            <img src="{{ asset('/img/badkamer-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
            <img src="{{ asset('/img/keuken-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
            <img src="{{ asset('/img/onderhoud-dak-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
            <img src="{{ asset('/img/onderhoud-electronica-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
            <img src="{{ asset('/img/vloer-leggen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
            <img src="{{ asset('/img/woonkamer-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
        </div>
        <div class="content no-border">
            <img src="{{ asset('/img/klusjes-in-zwolle.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">
            <article>
                <h2 class="primair">Klussenbedrijf in Zwolle zoeken?</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos neque voluptatem sequi totam nam laudantium at reprehenderit labore repellat, numquam debitis ipsam necessitatibus repudiandae, voluptas nisi consectetur explicabo corrupti quia facere natus fuga velit omnis odit mollitia. Magnam sunt, eveniet porro aperiam, molestias aliquid cupiditate possimus architecto unde esse corrupti.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos neque voluptatem sequi totam nam laudantium at reprehenderit labore repellat, numquam debitis ipsam necessitatibus repudiandae, voluptas nisi consectetur explicabo corrupti quia facere natus fuga velit omnis odit mollitia. Magnam sunt, eveniet porro aperiam, molestias aliquid cupiditate possimus architecto unde esse corrupti.
                </p>
            </article>
        </div>
    </div>
    <footer>
        <div class="container">
            @ 2020
        </div>
    </footer>
    <script src="{{ asset('js/js_events.js') }}"></script>
</body>
</html>