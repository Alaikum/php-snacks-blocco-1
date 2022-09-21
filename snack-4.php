<?php
// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto 
// che l’array non dovrà contenere lo stesso numero più
//  di una volta
$num = [];

while (count($num) < 15) {

    $random = rand(1, 50);
    if (!in_array($random, $num)) {
        $num[] = $random;
    }
}


?>

<h1>15 Numeri casuali da 1 a50</h1>

<ul>

    <?
   
    for ($i = 0; $i < count($num); $i++) {
       
    ?>
        <li> <?=$num[$i]?> </li>
    <? }
    ?>
</ul>

<style>
    h1{
        text-align: center;
        color: salmon;
    }
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
        font-size: 24px;
        font-weight: 900;
    }
  
</style>