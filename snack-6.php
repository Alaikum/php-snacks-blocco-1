<?php
// echo('snack 6')
// Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. 
// Stampiamo il nostro array mettendo gli insegnanti in
//  un rettangolo grigio e i PM in un rettangolo verde.




$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

// var_dump($db)



?>

<div class="main">
    <? for ($i = 0; $i < count($db); $i++) {
        $jobs = (array_keys($db));
    ?>
        <p>
            <? if ($jobs[$i] == 'pm') {
                $var = $jobs[$i];
                $pmList = $db[$var];
            ?>
        <div class="pm">
            <ul>
                <?
                for ($j = 0; $j < count($pmList); $j++) {
                ?>
                    <li>
                        <?= "Nome: {$pmList[$j]['name']} Cognome: {$pmList[$j]['lastname']}"
                        ?>
                    </li>
                <?
                }
                ?>


            </ul>
        </div>

    <?


            } else {
                $var = $jobs[$i];
                $pmList = $db[$var];
    ?><div class="teachers">
            <ul>
                <?
                for ($j = 0; $j < count($pmList); $j++) {
                ?>
                    <li>
                        <?= "Nome: {$pmList[$j]['name']} Cognome: {$pmList[$j]['lastname']}"
                        ?>
                    </li>
                <?
                }
                ?>


            </ul>
        </div>

    <?
            } ?>
    </p>
<?
    } ?>
</div>



<style>
    ul {
        list-style: none;
    }

    .main {

        text-align: center;
    }

    .teachers {
        background-color: grey;
        border: 1px solid black;
    }

    .pm {
        background-color: green;
        border: 1px solid black;
    }
</style>