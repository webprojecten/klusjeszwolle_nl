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
            <div id="cta-image">
                <div id="cta-tekst">
                    <h2 class="fadeIn_1" style="opacity:0;">Klussenbedrijf nodig?</h2>
                    <h2 class="fadeIn_2" style="opacity:0;">Wij kunnen u helpen</h2>
                    <a href="{{ asset('#') }}"><h2 class="fadeIn_3" style="opacity:0;">Zelfs met spoed!</h2></a>
                </div>
            </div>
        </div>
        <h1 class="primair">KlusjesZwolle.nl: wij staan dag en nacht klaar voor al uw klussen in Zwolle</h1>
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
        
        <div class="content">
            <img src="{{ asset('/img/klusjes-in-zwolle.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">
            <article>
            <h2 class="primair">Op zoek naar een klussenbedrijf in Zwolle?</h2>
                <p>
                    Heeft u een bepaalde klus die gedaan moet worden in en rond het huis? Of misschien moeten er klusjes worden gedaan in uw bedrijfspand? U zoekt een goed klussenbedrijf in Zwolle? Zoek niet verder! KlusjesZwolle.nl kan u helpen.
                </p>
                <p>
                    KlusjesZwolle.nl kan u helpen met allerlei soorten klussen in en om het huis of bedrijfspand. Moet er een vloer gelegd worden? KlsujesZwolle.nl kan ervoor zorgen dat binnen no-time een vloer in uw huiskamer ligt. Maar ook als u uw dakgoten wilt laten onderhouden, een schutting moet worden geplaats of er moet worden behangen kan KlusjesZwolle u helpen.
                </p>
                <p>
                    KlusjesZwolle is uw partner in de meeste klussen die u maar heeft. Tip: weet u niet zeker of KlusjesZwolle.nl uw klus voor u kan doen, vraag dan geheel gratis en vrijblijven een offerte aan. Wij gaan dan kijken of, wanneer en tegen welke prijs wij u klus voor u kunnen doen.
                </p>
            </article>
        </div>
        <div class="content no-border">
            <article>
                <h2 class="primair">KlsujesZwolle.nl is het klussenbedrijf voor bedrijfspanden</h2>
                <p>
                    U heeft een bedrijfspand waar onderhoud nodig is? U bent net in uw bedrijfspand gaan zitten en hebt een nieuwe vloer ndig? Wij kunnen u helpen met zowel advies als uitovering.
                </p>
                <p>
                    Heeft u een nieuwe balie nodig voor uw klatencontact? Wij kunnen deze klus snel en netjes uitvoeren, zodat u er geen omkijken naar heeft. Uw bestaande klanten zullen zich afvragen of ze in een nieuw kantoor zijn gelopen.
                </p>
                <p>
                    Maar misschien heeft u wel een andere klus. Wilt u een airco aanleggen? KlusjesZwolle.nl kan het voor u regelen. Een vergaderruimte inrichten compleet met beamer en projectiescherm? Voor KlusjesZwolle.nl is het allemaal geen probleem. Als u gratis en vrijblijvend een offerte aanvraagt, zullen wij zo snel mogelijk contact met u opnemen om de mogelijkheden en de kosten met u te bespreken. 
                </p>
            </article>
            <img src="{{ asset('/img/vergaderruimte-in-zwolle-laten-bouwen.jpg') }}" alt="Klusjes in Zwolle" title="Klusjes in Zwolle">

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
                <h2 class="primair">KlusjesZwolle.nl laat geen rotzooi achter na uw klus in Zwolle</h2>
                <p>
                    Bij KlusjesZwolle.nl vinden wij dat nadat uw klus is gedaan u niet opgezadeld moet worden met nog een klus: opruimen. Wij zorgen ervoor dat alles netjes achter wordt gelaten. Zo heeft u ook na het verhelpen van de klus geen gedoe achteraf.
                </p>
                <p>
                    Sommige klussen maken meer rotzooi dan anderen. Maar bij KlusjesZwolle.nl vinden wij dat u hier op geen enkele manier last van moet hebben. Daarom zeggen wij bij KlsujesZwolle.nl altijd: klus gedaan en alles netjes. Zo hoeft u niet alsnog zelf alles op te ruimen.
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
