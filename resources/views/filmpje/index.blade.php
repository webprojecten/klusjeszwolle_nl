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
        <div id="clip-viewport" style="display: flex;">
            <img id="img_1" class="img" src="/img/21.jpg" alt="">
            <img id="img_2" class="img" src="/img/22.jpg" alt="">
            <img id="img_3" class="img" src="/img/23.jpg" alt="">
            <img id="img_4" class="img" src="/img/24.jpg" alt="">
            <!----   text loop voor het filmpje    ---->
            <div id="text_1" class="text">
                <p>In mei 1940 werd Nederland binnengevallen door het Duitse leger.</p>
            </div>
            <div id="text_2" class="text">
                <p>Zij waren uit op de totale overheersing van het Nederlandse volk</p>
            </div>
            <div id="text_3" class="text">
                <p>Nederland werd hard getroffen door Duitse bombardementen</p>
            </div>
            <div id="text_4" class="text">
                <p>
                    Door de bezetting hadden mensen moeite om werk te vinden en kinderen hadden geen plaats om te spelen
                </p>
            </div>
            <div id="text_5" class="text">
                <p>Veel mensen leefden in armoede</p>
            </div>
            <div id="text_6" class="text">
                <p>Maar na 5 uitzichtloze jaren bleek er toch nog hoop te zijn...</p>
            </div>
            <div id="text_7" class="text">
                <p>In mei 1945 werd Nederland bevrijd van de Duitsers</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    $arr = ['joop', 'piet', 'klaas', '/img/4.jpg'];
    $duration = '60s';
?>

<style>
    #clip-viewport {
        width: 600px;
        height: 400px;
        position: absolute;
        overflow: hidden;
    }

    .text {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        color: #eee;
        font-size: 1.8em;
        font-family: Helvetica, sans-serif;
        font-weight: 900;
        text-shadow: 2px 2px black;
    }

    .text p {
        width: 70%;
        margin: auto;
    }


    #img_1 {
        z-index:13;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 play_1;
        animation: <?php echo $duration ?> ease 0s 1 play_1;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    #img_2 {
        z-index:12;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 play_2;
        animation: <?php echo $duration ?> ease 0s 1 play_2;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    #img_3 {
        z-index:11;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 play_3;
        animation: <?php echo $duration ?> ease 0s 1 play_3;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    #img_4 {
        z-index:10;
        -webkit-animation: <?php echo $duration ?> ease 0s 1 play_4;
        animation: <?php echo $duration ?> ease 0s 1 play_4;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    
    .img {
        opacity: 0;
        width: 600px;
        height: 400px;
        position: absolute;
    }

    #text_1 {
        opacity: 0;
        -webkit-animation: <?php echo $duration ?>  ease 0s 1 clipText_1;
        animation: <?php echo $duration ?>  ease 0s 1 clipText_1;
        z-index:100001;
    }

    #text_2 {
        opacity: 0;
        -webkit-animation: <?php echo $duration ?>  ease 0s 1 clipText_2;
        animation: <?php echo $duration ?>  ease 0s 1 clipText_2;
        z-index: 100002;
    }

    #text_3 {
        opacity: 0;
        -webkit-animation: <?php echo $duration ?>  ease 0s 1 clipText_3;
        animation: <?php echo $duration ?>  ease 0s 1 clipText_3;
        z-index: 100003;
    }

    #text_4 {
        opacity: 0;
        -webkit-animation:  <?php echo $duration ?>  ease 0s 1 clipText_4;
        animation:  <?php echo $duration ?>  ease 0s 1 clipText_4;
        z-index: 100004;
    }

    #text_5 {
        opacity: 0;
        -webkit-animation:  <?php echo $duration ?>  ease 0s 1 clipText_5;
        animation:  <?php echo $duration ?>  ease 0s 1 clipText_5;
        z-index: 100005;
    }

    #text_6 {
        opacity: 0;
        -webkit-animation:  <?php echo $duration ?>  ease 0s 1 clipText_6;
        animation:  <?php echo $duration ?>  ease 0s 1 clipText_6;
        z-index: 100006;
    }

    #text_7 {
        opacity: 0;
        -webkit-animation:  <?php echo $duration ?>  ease 0s 1 clipText_7;
        animation:  <?php echo $duration ?>  ease 0s 1 clipText_7;
        z-index: 100007;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    
    @keyframes play_1 {
        0% {
            opacity: 1;
            left: 0;
            top:0;
        }
        18% {
            opacity: 1;
            width: 140%;
            height: 140%;
            left: -1%;
            top:-20%;
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
            left: -1%;
            top:-30%;
            opacity:0;
        }
    }

    @keyframes play_2 {
        0% {
            left:0;
            top:0;
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
            top: -5%;
            left: -55%;
            width: 160%;
            height: 160%;
            opacity: 1;
        }
        45% {
            opacity: 0;
        }
        100% {
            top: -5%;
            left: -85%;
            width: 160%;
            height: 160%;
            opacity: 0;
        }
    }

    @keyframes play_3 {
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

    @keyframes play_4 {
        0% { 
            top: 0; /* Moet in Edge bij 0% anders werkt het niet */
            left: 0; /* Moet in Edge bij 0% anders werkt het niet */
            opacity: 0;
        }
        30% {
            opacity: 0;
        }
        35% {
            opacity:1;
        }
        40%{

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
            top: -35%;
            left: -15%;
        }
    }

    /* todo pas webkits aan  */
    @keyframes clipText_1 {
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

    @keyframes clipText_2 {
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

    @keyframes clipText_3 {
        0% {
            opacity: 0;
        }
        24%{
            opacity: 0;
        }
        26%{
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

    @keyframes clipText_4 {
        0% {
            opacity: 0;
        }
        43%{
            opacity: 0;
        }
        45%{
            opacity: 1;
        }
        53%{
            opacity: 1;
        }
        55%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes clipText_5 {
        0% {
            opacity: 0;
        }
        57%{
            opacity: 0;
        }
        59%{
            opacity: 1;
        }
        65%{
            opacity: 1;
        }
        67%{
            opacity: 0
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes clipText_6 {
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

    @keyframes clipText_7 {
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

