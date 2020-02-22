<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div id="filmpje-container">
        <div id="filmpje" style="display: flex;">
            <img id="img_1" class="img" src="/img/4.jpg" alt="">
            <img id="img_2" class="img" src="/img/5.jpg" alt="">
            <img id="img_3" class="img" src="/img/6.jpg" alt="">
            <!----   Tekst loop voor het filmpje    ---->
            <div id="tekst_1" class="tekst">
                Hallo allemaal!
            </div>
            <div id="tekst_2" class="tekst">
                Welkom op de website.
            </div>
            <div id="tekst_3" class="tekst">
                Wat leuk dat dit werkt!
            </div>
            <div id="tekst_4" class="tekst">
                :)
            </div>
            <div id="tekst_5" class="tekst">
                Meisje met autosleutels
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
        position: relative;
        overflow:hidden;
    }

    .tekst {
        position: absolute;
        top:30%;
        left: 20%;
        margin: auto; 
        color: white;
        font-size: 7em;
        font-family: Helvetica, sans-serif;
        font-weight: 900;
        text-shadow: 2px 2px black;
    }

    .img {
        opacity: 0;
        width: 1200px;
        height: 800px;
        position: absolute;

    }

    #img_1 {
        opacity: 1 !important;
        z-index:3;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_1;
        animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_1;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    #img_2 {
        z-index:2;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_2;
        animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_2;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    #img_3 {
        z-index:1;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_3;
        animation: <?php echo $duration ?> ease 0s 1 filmpjeAfspelen_3;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
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
    
    @keyframes filmpjeAfspelen_1 {
        0% {
            opacity: 1;
        }
        10%{
        }
        13% {
            opacity: 1;
            width: 180%;
            height: 180%;
            left: 0;
        }
        25% {
            left: -75%;
            width: 180%;
            height: 180%;
            opacity: 1;
        }
        30% {
            opacity:0;
        }

        100% {
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
        25% {
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
            opacity: 0;
        }
    }

    @keyframes filmpjeAfspelen_3 {
        0% {
            opacity: 0;
        }
        5% {
            opacity: 1;
        }
        40%{
            top:0;
            left:0;
            width: 100%;
            height: 100%;
        }
        75% {
            width: 105%;
            height: 105%;
            top: 0;
            left: 0;
        }
        100% {
            width: 105%;
            height: 105%;
            top: 0;
            left: 0;
        }
    }

    @-webkit-keyframes filmpjeAfspelen_1 {
        0% {
            /* background-position: 8% 2%; */
            
        }
        23% {
        }
        25% {
            /* background-image: url('/img/4.jpg');
            background-size: 200%;
            background-position: 92% 2%; */
        }
        30% {
            /* background-image: url('/img/5.jpg');
            background-size: 150%; */
        }
        40% {
            /* background-image: url('/img/6.jpg');
            background-size: 100%;
            background-position: 50% 50%; */
        }
        100% {
            /* background-image: url('/img/6.jpg');
            background-size: 100%;
            background-position: 0% 0%; */
        }
    }

    @-webkit-keyframes filmpjeAfspelen_2 {
        0% {
            /* opacity: 1; */
            /* background-position: 8% 2%; */
            
        }
        5% {
            /* opacity: 1; */
        }
        25% {
            /* background-image: url('/img/4.jpg');
            background-size: 200%;
            background-position: 92% 2%; */
        }
        30% {
            /* background-image: url('/img/5.jpg');
            background-size: 150%; */
        }
        40% {
            /* background-image: url('/img/6.jpg');
            background-size: 100%;
            background-position: 50% 50%; */
        }
        100% {
            /* background-image: url('/img/6.jpg');
            background-size: 100%;
            background-position: 0% 0%; */
        }
    }

    @-webkit-keyframes filmpjeAfspelen_3 {
        0% {
            /* opacity: 1;
            background-position: 8% 2%; */
            
        }
        5% {
            /* opacity: 1; */
        }
        25% {
            /* background-image: url('/img/4.jpg');
            background-size: 200%;
            background-position: 92% 2%; */
        }
        30% {
            /* background-image: url('/img/5.jpg');
            background-size: 150%; */
        }
        40% {
            /* background-image: url('/img/6.jpg');
            background-size: 100%;
            background-position: 50% 50%; */
        }
        100% {
            /* background-image: url('/img/6.jpg');
            background-size: 100%;
            background-position: 0% 0%; */
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
        7.1%{
            opacity: 1;
        }
        9.1%{
            display: none;
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
        10%{
            opacity: 0;
        }
        12%{
            opacity: 1;
        }
        12.1%{
            opacity: 1;
        }
        14.1%{
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
        15%{
            opacity: 0;
        }
        17%{
            opacity: 1;
        }
        17.1%{
            opacity: 1;
        }
        19.1%{
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
        20%{
            opacity: 0;
        }
        22%{
            opacity: 1;
        }
        22.1%{
            opacity: 1;
        }
        24.1%{
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
        60%{
            opacity: 0;
        }
        62%{
            opacity: 1;
        }
        62.1%{
            opacity: 1;
        }
        64.1%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes filmpjeTekst_1 {
        0% {
            opacity: 0;
        }
        5%{
            opacity: 0;
        }
        7%{
            opacity: 1;
        }
        7.1%{
            opacity: 1;
        }
        9.1%{
            display: none;
            opacity: 0
        }
        100% {
            display: none;
            opacity: 0;
        }
    }

    @-webkit-keyframes filmpjeTekst_2 {
        0% {
            opacity: 0;
        }
        10%{
            opacity: 0;
        }
        12%{
            opacity: 1;
        }
        12.1%{
            opacity: 1;
        }
        14.1%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes filmpjeTekst_3 {
        0% {
            opacity: 0;
        }
        15%{
            opacity: 0;
        }
        17%{
            opacity: 1;
        }
        17.1%{
            opacity: 1;
        }
        19.1%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes filmpjeTekst_4 {
        0% {
            opacity: 0;
        }
        20%{
            opacity: 0;
        }
        22%{
            opacity: 1;
        }
        22.1%{
            opacity: 1;
        }
        24.1%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes filmpjeTekst_5 {
        0% {
            opacity: 0;
        }
        50%{
            opacity: 0;
        }
        52%{
            opacity: 1;
        }
        52.1%{
            opacity: 1;
        }
        54.1%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }


</style>

