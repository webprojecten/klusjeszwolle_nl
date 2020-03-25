@extends('base')

@section('content')
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
                        <li>Geen gedoe achteraf</li>
                        <li>100% tevreden</li>
                    </ul>
                    <a href=""><button>Offerte aanvragen</button></a>
                </div>
            </div>
            <div class="cta-image" id="cta-image-klussen-zwolle">
                <div id="cta-tekst">
                    <h2 class="fadeIn_1" style="opacity:0;">Klussenbedrijf in Zwolle nodig?</h2>
                    <h2 class="fadeIn_2" style="opacity:0;">Wij kunnen u helpen</h2>
                    <h2 class="fadeIn_3" style="opacity:0;">Zelfs met spoed!</h2>
                </div>
            </div>
        </div>
        <h1 class="primair">Klussenbedrijf in Zwolle nodig voor uw klussen? KlusjesZwolle.nl staat voor u klaar!</h1>
        <div id="mogelijkheden">
            <div class="img-container">
                <img src="{{ asset('/img/badkamer-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <a href="{{ asset('/badkamer-verbouwen') }}">
                    <div class="overlay">
                    <div class="text">Badkamer verbouwen?</div>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/keuken-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <a href="{{ asset('/keuken-verbouwen') }}">
                    <div class="overlay">
                    <div class="text">Keuken Verbouwen?</div>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/onderhoud-dak-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <a href="{{ asset('/dak-onderhouden') }}">
                    <div class="overlay">
                    <div class="text">Dak onderhouden?</div>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/onderhoud-electronica-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <a href="{{ asset('/electronica-onderhouden') }}">
                    <div class="overlay">
                    <div class="text">Electronica onderhouden?</div>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/vloer-leggen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <a href="{{ asset('/vloer-leggen') }}">
                    <div class="overlay">
                    <div class="text">Vloer leggen?</div>
                    </div>
                </a>
            </div>
            <div class="img-container">
                <img src="{{ asset('/img/woonkamer-verbouwen-zwolle.jpg') }}" alt=" in Zwolle" title=" in Zwolle">
                <a href="{{ asset('/woonkamer-verbouwen') }}">
                    <div class="overlay">
                    <div class="text">Woonkamer verbouwen?</div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="content">
            <img src="{{ asset('/img/klusjes-in-zwolle.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">
            <article>
            <h2 class="primair">KlusjesZwolle.nl: hét klussenbedrijf in Zwolle</h2>
                <p>
                    KlusjesZwolle.nl is hét klussenbedrijf van Zwolle. Wij staan klaar voor al uw klussen. 
                </p>
                <p>
                    Of het nu gaat om klussen bij u thuis, of in uw bedrijfspand, KlusjesZwolle.nl kan u helpen. Of het nu gaat om dakgoten reinigen, een vloer aanleggen of uw electronica onderhouden, KlusjesZwolle.nl kan het allemaal voor u doen.
                </p>
                <p>
                    Tevens kunt u met uw bedrijfspand bij ons terecht. Wij kunnen voor u vloeren leggen, behangen, schilderen, een balie bouwen en nog vele andere dingen. Als u gratis en vrijblijvend een offerte aanvraagt, kunnen wij alles met u bespreken. Wij horen graag van u!
                </p>
            </article>
        </div>
        <div class="content no-border">
            <article>
                <h2 class="primair">Klussen in uw tuin in Zwolle (tuinonderhoud)? Ook dat kan met KlusjesZwolle.nl</h2>
                <p>
                    Heeft u tuinonderhoud nodig? KlusjesZwolle.nl kan u helpen.
                </p>
                <p>
                    Schutting plaatsen, muurtje metselen of een buitendeur inhangen. Wij kunnen u ermee helpen. KlusjesZwolle.nl is bekend met al uw tuinonderhoud. Wij kunnen zelfs uw tuin of oprit bestraten. Als u gratis en vrijblijvend een offerte aanvraagt, nemen wij contact met u op om de mogelijkheden met u te bespreken.  
                </p>
                <p>
                </p>
            </article>
            <img src="{{ asset('/img/tuinonderhoud-in-zwolle.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">

        </div>
        <!-- <h2 class="primair">Voorbeelden klussen in Zwolle</h2> -->
        <div class="icons">
            <div class="icon-container-container">
                <div class="icon-container">
                    <img src="{{ asset('/img/welke-klussen.svg') }}" alt="Welke klussen doen wij in Zwolle">
                    <h3>Klussen in Zwolle</h3>
                    <p>
                        Heeft u een klussenbedrijf nodig in Zwolle? Vraag een offerte aan en er wordt zo spoedig mogelijk contact met u opgenomen.
                </div>
                <div class="icon-container">
                    <img src="{{ asset('/img/in-en-om-het-huis.svg') }}" alt="Klussen in en om het huis">
                    <h3>In en om het huis</h3>
                    <p>
                        Wij kunnen al uw klussen doen in en om het huis. Vraag gratis en vrijblijvend een offerte aan en wij kunnen gaan kijken naar de mogelijkheden.
                    </p>
                </div>
                <div class="icon-container">
                    <img src="{{ asset('/img/snel.svg') }}" alt="Snelle oplevering">
                    <h3>Spoed voor uw klus</h3>
                    <p>
                        Heeft u haast? Klusjeszwolle.nl staat dag en nacht voor u klaar. U kunt ons vi ons spoednummer bereiken op 0612345678.
                    </p>
                </div>
            </div>
            <button>Offerte Aanvragen</button>
        </div>
        <div class="content">
            <img src="{{ asset('/img/gereedschap.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">
            <article>
                <h2 class="primair">Uw klus in Zwolle klaar? Geen rotzooi, geen gedoe</h2>
                <p>
                    Bij KlusjesZwolle.nl vinden wij het belangirjk dat als uw klus is geklaard, wij alles netjes achterlaten. U hoeft dus niet meer op te ruimen! Wij zorgen ervoor dat u, nadat wij ons werk hebben gedaan, meteen van ue geklaarde klus kunt genieten!
                </p>
                <p>
                    Vaak horen we nog verhalen van klusbedrijen die een rotzooi achterlaten. Wij vinden dat onacceptabel. Als u een klussenbedrijf in Zwolle inhuurt, vinden wij dat u ook recht heeft op een goede afwikkeling van de klus, inclusief opruimen. Wij zorgen er dus voor dat alles na uw klus netjes wordt achtergelaten.
                </p>
                <p>
                    Wilt u weten wat wij voor u kunen doen en hoe wij het achterlaten? Vraag dan gratis en vrijblijvend een offerte aan, zodat wij alle moigelijkheden met u kunnen bespreken.
                </p>
            </article>
        </div>
        <div class="content no-border">
            <article>
                <h2 class="primair">Haast met uw klus in Zwolle? Wij leveren spoed!</h2>
                <p>
                    Heeft u een gesproigen leiding en kunt u niet wachten? KlusjesZwolle.nl kan u met spoed helpen. 
                </p>
                <p class="spoed">
                    Spoednummer: 0000000000
                </p>
                <p>
                    Wij proberen zo snel mogelijk bij u aanwezig te zijn om uw probleem direct aan te pakken. Wacht niet langeer en bel het spoednummer, zodat wij meteen uw spoedklus in Zwolle kunnen oplossen.
                </p>
                <p>
                    Mogelijkheden en tarieven zullen over de telefoon zo snel mogelijk met u worden besproken. 
                </p>
            </article>
            <img src="{{ asset('/img/spoed-voor-uw-klus-in-zwolle.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">
        </div>
    </div>
@endsection
