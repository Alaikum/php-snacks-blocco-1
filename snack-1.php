<?php

// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa
//  e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite 
//  con questo schema.
// Olimpia Milano - Cantù | 55-60

$partita1 = [
    'home' => 'Scarsi',
    'guest' => 'Forti',
    'homePunti' => 55,
    'guestPunti' => 2
];

$partita2 = [
    'home' => 'Nerd',
    'guest' => 'Sportivi',
    'homePunti' => 0,
    'guestPunti' => 202
];
$partita3 = [
    'home' => 'Bassi',
    'guest' => 'Alti',
    'homePunti' => 101,
    'guestPunti' => 99
];
$partita4 = [
    'home' => 'Pigri',
    'guest' => 'Oziosi',
    'homePunti' => 1,
    'guestPunti' => 2
];

$partite = [
    $partita1,
    $partita2,
    $partita3,
    $partita4,

];

// var_dump($partite);

?>


<ul>
    <? for ($i = 0; $i < count($partite); $i++) {
        $match = $partite[$i];
    ?>
        <li>
        <? echo "{$match['home']} - {$match['guest']} |"
                ?>
                <span>
                    <? echo "{$match['homePunti']}-{$match['guestPunti']} " ?>
                </span>
        </li>
    <?
    } ?>

</ul>

<style>
    ul{
        max-width: 500px;
        margin: 0 auto;
        border: 1px solid saddlebrown;
        text-align: center;
        padding: 5px;
        background-color: beige;
    }
    li{
        list-style: none;
        font-size: 32px;
        font-weight: 900;
    }
    span {
        color: red;
        font-size: 24px;
        font-weight: 700;
    }
</style>