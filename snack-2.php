<?php

// echo 'snack 2';
// Snack 2
// Passare come parametri GET name, mail e age e verificare
//  (cercando i metodi che non conosciamo nella documentazione)
//   che name sia più lungo di 3 caratteri, che mail contenga un punto
//    e una chiocciola e che age sia un numero. Se tutto è ok stampare 
//    “Accesso riuscito”, altrimenti “Accesso negato”



$msg = 'Accesso Negato';
$why = '';

// CONTROLLO NAME 
$name = $_GET['name'];
$checkName = false;
if (strlen($name) > 3) {
    $checkName = true;
} else {
    $why = 'Il nome è troppo corto';
};


// CONTROLLO ETA'
$age = $_GET['age'];
$checkAge = false;
if (is_numeric($age)) {
    $checkAge = true;
} else {
    $why = 'Il valore inserito non è un numero';
};;




// CONTROLLO MAIL 
$email = $_GET['email'];

$checkMail = false;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $why = "Formato email non valido";
} else {
    $checkMail = true;
}
// var_dump($email);

// trova la posizione di  una substringa in una stringa 
// $a = strpos($email, '@');
// echo $a;

// $b = strpos($email, '.');
// echo $b;


// controllo email, presenza . e @ e anche la loro posizione  e i checkAge checkName
if ($checkMail && $checkAge && $checkName) {
    $msg = 'Accesso riuscito';
}





?>



<div>
    <p>Inserisci il tuo nome (name), la tua età(age) e la tua email(email) nella stringa</p>
    <p>Il nome deve essere più lungo di 3 caratteri, l'età un numero e l'email deve avere "@" seguita da "." </p>
    <p>esempio <i> ?name=Adamo&&age=23&&email=adamo@io.com</i></p>
    <h1><?= $msg ?></h1>
    <h2><?= $why ?></h2>

</div>