<?php
// echo('snack 7');
// Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe.
//  Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
//   Stampare Nome, Cognome e la media dei voti di ogni alunno.

$classe = [
    [
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'voti' => [5, 7, 2, 1, 4]
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Blu',
        'voti' => [2, 3, 4, 5, 6, 7, 8, 9, 10]
    ],
    [
        'nome' => 'Marco',
        'cognome' => 'Verde',
        'voti' => [8, 4]
    ],
    [
        'nome' => 'Paolo',
        'cognome' => 'Bianchi',
        'voti' => [3, 4, 8, 7, 1, 2, 5]
    ],
    [
        'nome' => 'Galadriel',
        'cognome' => 'Finarfin',
        'voti' => [10, 10, 10, 10, 10, 10, 10]
    ],
];

// var_dump($classe)
// echo'<br>';
// $sum=array_sum($classe[0]['voti']);

// echo $sum;
?>

<div>
    <h3>Elenco Studenti</h3>
    <ul>
        <? for ($i = 0; $i < count($classe); $i++) {
            $studente = $classe[$i];
            $sum = array_sum($studente['voti']);
            // echo(count($studente['voti']));
            // echo $sum;
            $media = $sum / count($studente['voti']);
            $mediaFloat = number_format($media, 2, ',', ' ');
            // echo $media;
            // echo $mediaFloat;
        ?>
            <li>
                <? echo "Nome: {$studente['nome']} Cognome: {$studente['cognome']} ha una media di $mediaFloat "  ?>
            </li>
        <?
        } ?>
    </ul>
</div>


<style>
    div {
        text-align: center;
        border: 3px solid greenyellow;
        max-width: 650px;
        margin: 0 auto;
        padding: 10px;
        border-radius: 25px;
        background-color: burlywood;

    }

    h3 {
        transition: 2s ease-out ;

    }

    h3:hover {
        color: red;
        scale: 1.5;
        cursor: pointer;
    }


    ul {
        list-style: none;
    }

    li{
    transition: 500ms ease-out ;
    }

    li:hover {
        color: cyan;
        scale: 1.5;
        cursor: pointer;
    }
</style>