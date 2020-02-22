<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="filmpje-container">
        <!-- todo met js aansturen dat het 'filmpje' aangaat als alle images geladen zijn o.t.m. de eerste paar -->
        <div id="filmpje" style="display: flex;">
            <img id="img_1" class="img" src="/img/21.jpg" alt="">
            <img id="img_2" class="img" src="/img/22.jpg" alt="">
            <img id="img_3" class="img" src="/img/23.jpg" alt="">
            <img id="img_4" class="img" src="/img/24.jpg" alt="">
            <!----   Tekst loop voor het filmpje    ---->
            <div id="tekst_1" class="tekst">
                <p>In mei 1940 werd Nederland binnengevallen door het duitse leger.</p>
            </div>
            <div id="tekst_2" class="tekst">
                <p>Zij wilden totale overheersing van Nederland</p>
            </div>
            <div id="tekst_3" class="tekst">
                <p>Nederland werd hard getroffen door duitse bombardementen</p>
            </div>
            <div id="tekst_4" class="tekst">
                <p>
                    Het leven in ons land was moeilijk doordat mensen constant werden geraalt door het duitse leger
                </p>
            </div>
            <div id="tekst_5" class="tekst">
                <p>Veel mensen leefden in armoede</p>
            </div>
            <div id="tekst_6" class="tekst">
                <p>Maar er was ook reden tot hoop...</p>
            </div>
            <div id="tekst_7" class="tekst">
                <p>In mei 1945 werd Nederland bevrijd van de Duitsers</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    $arr = ['joop', 'piet', 'klaas', '/img/4.jpg'];
    $two = 5;
    $duration = '60s';
?>

<style>
    #filmpje {
        width: 1200px;
        height: 800px;
        position: absolute;
        overflow: hidden;
    }

    .tekst {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        /* top:30%;
        left: 20%; */
        /* margin: auto;  */
        color: #eee;
        font-size: 4em;
        font-family: Helvetica, sans-serif;
        font-weight: 900;
        text-shadow: 2px 2px black;
    }

    .tekst p {
        width: 70%;
        margin: auto;
    }


    #img_1 {
        z-index:13;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_1;
        animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_1;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    #img_2 {
        z-index:12;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_2;
        animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_2;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    #img_3 {
        z-index:11;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_3;
        animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_3;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    #img_4 {
        z-index:10;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_4;
        animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_4;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    
    .img {
        opacity: 0;
        width: 1200px;
        height: 800px;
        position: absolute;
    }

    #tekst_1 {
        opacity: 0;
        -webkit-animation: <?php echo $duration ?>  ease 0s 1 filmpjeTekst_1;
        animation: <?php echo $duration ?>  ease 0s 1 filmpjeTekst_1;
        z-index:100001;
    }

    #tekst_2 {
        opacity: 0;
        -webkit-animation: <?php echo $duration ?>  ease 0s 1 filmpjeTekst_2;
        animation: <?php echo $duration ?>  ease 0s 1 filmpjeTekst_2;
        z-index: 100002;
    }

    #tekst_3 {
        opacity: 0;
        -webkit-animation: <?php echo $duration ?>  ease 0s 1 filmpjeTekst_3;
        animation: <?php echo $duration ?>  ease 0s 1 filmpjeTekst_3;
        z-index: 100003;
    }

    #tekst_4 {
        opacity: 0;
        -webkit-animation:  <?php echo $duration ?>  ease 0s 1 filmpjeTekst_4;
        animation:  <?php echo $duration ?>  ease 0s 1 filmpjeTekst_4;
        z-index: 100004;
    }

    #tekst_5 {
        opacity: 0;
        -webkit-animation:  <?php echo $duration ?>  ease 0s 1 filmpjeTekst_5;
        animation:  <?php echo $duration ?>  ease 0s 1 filmpjeTekst_5;
        z-index: 100005;
    }

    #tekst_6 {
        opacity: 0;
        -webkit-animation:  <?php echo $duration ?>  ease 0s 1 filmpjeTekst_6;
        animation:  <?php echo $duration ?>  ease 0s 1 filmpjeTekst_6;
        z-index: 100006;
    }

    #tekst_7 {
        opacity: 0;
        -webkit-animation:  <?php echo $duration ?>  ease 0s 1 filmpjeTekst_7;
        animation:  <?php echo $duration ?>  ease 0s 1 filmpjeTekst_7;
        z-index: 100007;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    
    @keyframes filmpjeAfspelen_1 {
        0% {
            opacity: 1;
            left: 0;
            top:0;
        }
        15% {
            opacity: 1;
            width: 140%;
            height: 140%;
            left: -10px;
            top:-100px;
        }
        20% {
            width: 140%;
            height: 140%;
            opacity: 1;
        }
        25% {
            width: 140%;
            height: 140%;
            opacity:0;
        }
        100% {
            left: -10px;
            top:-100px;
            opacity:0;
        }
    }

    @keyframes filmpjeAfspelen_2 {
        0% {
            opacity: 0;
        }
        5% {
            opacity: 1;
        }
        20% {
            left:0;
            top:0;
            width: 100%;
            height: 100%;
        }
        40% {
            top: -100px;
            left: -700px;
            width: 160%;
            height: 160%;
            opacity: 1;
        }
        45% {
            opacity: 0;
        }
        100% {
            top: -100px;
            left: -700px;
            width: 160%;
            height: 160%;
            opacity: 0;
        }
    }

    @keyframes filmpjeAfspelen_3 {
        0% {
            opacity: 0;
        }
        30% {
            opacity: 0;
        }
        35% {
            opacity:1;
        }
        40%{
            top:0;
            left:0;
            width: 100%;
            height: 100%;
        }
        75% {
            width: 115%;
            height: 115%;
            top: 0;
            left: 0;
            opacity:1;
        }
        80%{
            opacity: 0;
        }
        100% {
            opacity:0;
            width: 115%;
            height: 115%;
            top: 0;
            left: 0;
        }
    }

    @keyframes filmpjeAfspelen_4 {
        0% {
            opacity: 0;
        }
        30% {
            opacity: 0;
        }
        35% {
            opacity:1;
        }
        40%{
            top:0;
            left:0;
            width: 100%;
            height: 100%;
        }
        75% {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }
        100% {
            opacity:1;
            width: 145%;
            height: 145%;
            top: -200px;
            left: -200px;
        }
    }

    /* todo pas webkits aan  */
    @keyframes filmpjeTekst_1 {
        0% {
            opacity: 0;
        }
        5%{
            opacity: 0;
        }
        7%{
            opacity: 1;
        }
        10%{
            opacity: 1;
        }
        12%{
            opacity: 0
        }
        100% {
            display: none;
            opacity: 0;
        }
    }

    @keyframes filmpjeTekst_2 {
        0% {
            opacity: 0;
        }
        13%{
            opacity: 0;
        }
        15%{
            opacity: 1;
        }
        18%{
            opacity: 1;
        }
        20%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes filmpjeTekst_3 {
        0% {
            opacity: 0;
        }
        27%{
            opacity: 0;
        }
        29%{
            opacity: 1;
        }
        32%{
            opacity: 1;
        }
        34%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes filmpjeTekst_4 {
        0% {
            opacity: 0;
        }
        43%{
            opacity: 0;
        }
        45%{
            opacity: 1;
        }
        48%{
            opacity: 1;
        }
        50%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes filmpjeTekst_5 {
        0% {
            opacity: 0;
        }
        50%{
            opacity: 0;
        }
        52%{
            opacity: 1;
        }
        60%{
            opacity: 1;
        }
        62%{
            opacity: 0
        }
        300% {
            opacity: 0;
        }
    }

    @keyframes filmpjeTekst_6 {
        0% {
            opacity: 0;
        }
        70%{
            opacity: 0;
        }
        72%{
            opacity: 1;
        }
        78%{
            opacity: 1;
        }
        80%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes filmpjeTekst_7 {
        0% {
            opacity: 0;
        }
        85%{
            opacity: 0;
        }
        87%{
            opacity: 1;
        }
        95%{
            opacity: 1;
        }
        97%{
            opacity: 1
        }
        100% {
            opacity: 1;
        }
    }

</style>

