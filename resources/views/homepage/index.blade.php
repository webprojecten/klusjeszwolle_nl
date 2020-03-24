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
                        <li>Snel klaar</li>
                        <li ><a href="{{ asset('/spoedverbouwing-in-zwolle') }}" class="contrast"><b>Spoed mogelijk!</b></a></li>
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
                    <h2 class="fadeIn_1" style="opacity:0;">Klussenbedrijf nodig?</h2>
                    <h2 class="fadeIn_2" style="opacity:0;">Wij kunnen u helpen</h2>
                    <a href="{{ asset('#') }}"><h2 class="fadeIn_3" style="opacity:0;">Zelfs met spoed!</h2></a>
                </div>
            </div>
        </div>
        <h1 class="primair">KlusjesZwolle.nl: wij staan dag en nacht klaar voor al uw klussen in Zwolle</h1>
        <div class="icons">
            <div class="icon-container">
                <img src="{{ asset('/img/welke-klussen.svg') }}" alt="Welke klussen doen wij in Zwolle">
                <h3>Klussen in Zwolle</h3>
                <p>
                    Heeft u een klussenbedrijf nodig in Zwolle? Vraag een offerte aan en er wordt zo spoedig mogelijk contact met u opgenomen. Gratis en vrijblijvend!
                </p>
            </div>
            <div class="icon-container">
                <img src="{{ asset('/img/in-en-om-het-huis.svg') }}" alt="Klussen in en om het huis">
                <h3>In en om het huis</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt modi officia blanditiis delectus quibusdam, molestias maxime praesentium laborum itaque!
                </p>
            </div>
            <div class="icon-container">
                <img src="{{ asset('/img/snel.svg') }}" alt="Snelle oplevering">
                <h3>spoed</h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ab laboriosam aliquid! Explicabo, harum. Aperiam quasi natus accusantium!
            </div>
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
            <div class="img-container">
                <img src="{{ asset('/img/badkamer-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <div class="overlay">
                    <div class="text">Badkamer verbouwen?</div>
                </div>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/keuken-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <div class="overlay">
                    <div class="text">Keuken Verbouwen?</div>
                </div>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/onderhoud-dak-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <div class="overlay">
                    <div class="text">Dak onderhouden?</div>
                </div>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/onderhoud-electronica-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <div class="overlay">
                    <div class="text">Electronica onderhouden?</div>
                </div>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/vloer-leggen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <div class="overlay">
                    <div class="text">Vloer leggen?</div>
                </div>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/woonkamer-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <div class="overlay">
                    <div class="text">Woonkamer verbouwen?</div>
                </div>
            </div>
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