<?php
// echo('snack3')
// Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una
//  data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore 
//  un array di post associati a quella data. Stampare ogni data con i relativi post.
// Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

$posts = [

    '10/01/2022' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni1',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni2',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni3',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni4',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni5',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni6',
            'text' => 'Testo post 6'
        ]
    ],
];

// var_dump( $posts[ '10/01/2022'][0]['title']);


// var_dump(array_keys($posts));




?>


<? for ($i = 0; $i < count($posts); $i++) {

    $name = (array_keys($posts));
    // echo $name[$i];
    // var_dump($posts[$name[$i]]);
    $date = $name[$i];
    $postPerData = ($posts[$date]);
    // var_dump($postPerData);
    ?>

    <ul> Post del: <?= $date;
       
        for ($j = 0; $j < count($postPerData); $j++) {
            $postTitle = $postPerData[$j]['title'];
            $postAuthor = $postPerData[$j]['author'];
            $postText = $postPerData[$j]['text'];

        ?> <li> <?= "Title: $postTitle, Autor: $postAuthor, Text: $postText" ?> </li>
        <?

        } ?>

    </ul>
<?
}
?>