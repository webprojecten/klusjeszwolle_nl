<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: none;"><img src="/img/4.jpg" alt=""></div>
    <div style="display: none;"><img src="/img/5.jpg" alt=""></div>
    <div style="display: none;"><img src="/img/6.jpg" alt=""></div>
    <div id="filmpje-container">
        <div id="filmpje" style="display: flex;">
            <!----   Tekst loop voor het filmpje    ---->
            <div class="tekst tekst_1">
                Hallo allemaal!
            </div>
            <div class="tekst tekst_1">
                Welkom op de website.
            </div>
        </div>
    </div>
</body>
</html>
<?php
    $arr = ['joop', 'piet', 'klaas', '/img/4.jpg'];
    $two = 5;
?>

<style>
    #filmpje {
        background-image:url(
            '<?php echo $arr[3] ?>'
        );
        width: 1200px;
        height: 800px;
        background-size: 100%;
        background-position: 0% 0%;
        background-color:#adadad;
        background-blend-mode: multiply;
        animation: 30s ease 0s 1 filmpjeAfspelen;
        animation-fill-mode: forwards;
        position: relative;
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

    .tekst_1 {
        opacity: 0;
        animation: 30s ease 0s 1 filmpjeTekst_1;
        z-index:1;
    }

    .tekst_2 {
        opacity: 0;
        animation: 30s ease 0s 1 filmpjeTekst_2;
        z-index: 2;
    }

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

    @keyframes filmpjeAfspelen {
        0% {
            background-size: 100%;
            background-position: 8% 2%;
            
        }
        <?php echo $two ?>% {
            background-size: 200%;
            background-image:url(
                '<?php echo $arr[3] ?>'
            );
        }
        25% {
            background-image: url('/img/4.jpg');
            background-size: 200%;
            background-position: 92% 2%;
        }
        30% {
            background-image: url('/img/5.jpg');
            background-size: 150%;
        }
        40% {
            background-image: url('/img/6.jpg');
            background-size: 100%;
            background-position: 50% 50%;
        }
        100% {
            background-image: url('/img/6.jpg');
            background-size: 100%;
            background-position: 0% 0%;
        }
    }
</style>

