<?php
/* 
## Snack 3

Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.

*/

$data = [

    '10/01/2022' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
            'img' => "<img src='https://picsum.photo/400/200' />"
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2',
            'img' => "<img src='https://picsum.photo/400/200' />"
        ],
    ],
    '22/02/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3',
            'img' => "<img src='https://picsum.photo/400/200' />"
        ]
    ],
    '22/05/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4',
            'img' => "<img src='https://picsum.photo/400/200' />"
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5',
            'img' => "<img src='https://picsum.photo/400/200' />"
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6',
            'img' => "<img src='https://picsum.photo/400/200' />"
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Snakc - 3 </title>
</head>

<body>
    <?php foreach ($data as $date => $posts) : ?>
        <h6><?php echo $date ?></h6>
        <ul>
            <?php foreach ($posts as $post) : ?>
                <li> <?php echo $post['img'] ?> </li>
                <li> author: <?php echo $post['author'] ?> </li>
                <li> <?php echo $post['title'] ?> </li>
                <li> <?php echo $post['text'] ?> </li>
                <hr>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>
</body>

</html>