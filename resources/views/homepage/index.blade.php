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
    <div id="call-to-action">
        <div id="cta-tekst" class="transparent-from-left">
            <h2>Geen enkele klus in Zwolle is ons één teveel</h2>
        </div>
        <div id="cta-form">
            <form action="">
                <h2>Vraag een offerte aan</h2>
                <input type="text" name="email" id="email" placeholder="Email">
                <textarea name="omschrijving" id="omschrijving" cols="30" rows="7" placeholder="Omschrijving"></textarea>
                <button>Offerte aanvragen</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h1 class="primair">Een klussenbedrijf voor al uw klusjes? Bij klusjesZwolle.nl staan wij dag én nacht voor u klaar.</h1>
    </div>
    <section class="voordelen">

    </section>
    <script src="{{ asset('js/js_events.js') }}"></script>
</body>
</html>