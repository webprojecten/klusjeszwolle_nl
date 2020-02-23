<?php
$resultaat = [
    0 => [
        'clip' => 'start', #optioneel als je wilt beginnen zonder foto
        'popTo' => '/img/21.jpg',
        'popPosition' => 'top 0 left 0 100', #default, hoeft dus niet
        'zoom' => '130%',
        'zoomTo'=> 'top 5 left 20',
        'zoomDuration' => 4000,
    ],
    4000 => [
        'pan' => 'start',
        'panTo' => 'right 20%',
        'panDuration' => 2000,
    ],
    6000 => [
        'fade' => 'out',
        'fadeTo' => '/img/22.jpg',
        'fadeSpeed' => 500, # hoeft niet als het 500(?) is?
        'zoomFrom' => "top 0 right 10 size 100", #als beginpunt voor zoom
        'zoomTo' => 'bottom 10 left 10 size 150',
        'zoomDuration' => 3000, #probeer 5000 zodat de duration langer is dan event => end
    ],
    9000 => [
        'clip' => 'end', #optioneel als je wilt eidingen zonder foto
        'event' => 'end'
    ]
];

$clipDuration = max(array_keys($resultaat));
dd($clipDuration);
?>