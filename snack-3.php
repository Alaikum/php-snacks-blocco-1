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
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// var_dump( $posts[ '10/01/2022'][0]['title']);


//     var_dump($posts['10/01/2022']);



?>


<ul> Post del 10/01/2022

    <?
    $post_10 = $posts['10/01/2022'];
    for ($i = 0; $i < count($post_10); $i++) {
        $post_10_stampa = $post_10[$i]
    ?>
        <li> <?= " Titolo: {$post_10_stampa['title']} , autore: {$post_10_stampa['author']} e testo : {$post_10_stampa['text']} .  " ?> </li>
    <? }
    ?>
</ul>

<ul> Post del 10/02/2022

    <?
    $post_10_02 = $posts['10/02/2022'];
    for ($i = 0; $i < count($post_10_02); $i++) {
        $post_10_02stampa = $post_10_02[$i]
    ?>
        <li> <?= " Titolo: {$post_10_02stampa['title']} , autore: {$post_10_02stampa['author']} e testo : {$post_10_02stampa['text']} .  " ?> </li>
    <? }
    ?>
</ul>

<ul> Post del 15/05/2022

    <?
    $post_15 = $posts['15/05/2022'];
    for ($i = 0; $i < count($post_15); $i++) {
        $post_15_stampa = $post_15[$i]
    ?>
        <li> <?= " Titolo: {$post_15_stampa['title']} , autore: {$post_15_stampa['author']} e testo : {$post_15_stampa['text']} .  " ?> </li>
    <? }
    ?>
</ul>