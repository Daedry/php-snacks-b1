<!--  
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

$pupils = [
    [
        'name' => 'Ethan',
        'lastname' => 'Rox',
        'votes' => [
            'english' => 7,
            'math' => 8,
            'science' => 6,
            'chemistry' => 8,
            'physics' => 6,
            'geography' => 7,
            'history' => 8,
        ]
    ],
    [
        'name' => 'Jason',
        'lastname' => 'Mill',
        'votes' => [
            'english' => 5,
            'math' => 7,
            'science' => 7,
            'chemistry' => 5,
            'physics' => 6,
            'geography' => 7,
            'history' => 3,
        ]
    ],
    [
        'name' => 'Luca',
        'lastname' => 'Perullo',
        'votes' => [
            'english' => 9,
            'math' => 5,
            'science' => 7,
            'chemistry' => 6,
            'physics' => 7,
            'geography' => 8,
            'history' => 6,
        ]
    ],
    [
        'name' => 'Chiara',
        'lastname' => 'Passetti',
        'votes' => [
            'english' => 9,
            'math' => 9,
            'science' => 8,
            'chemistry' => 8,
            'physics' => 9,
            'geography' => 9,
            'history' => 9,
        ]
    ],
    [
        'name' => 'Marlon',
        'lastname' => 'Riyugi',
        'votes' => [
            'english' => 7,
            'math' => 8,
            'science' => 8,
            'chemistry' => 9,
            'physics' => 8,
            'geography' => 8,
            'history' => 9,
        ]
    ]
];

$votes = $pupils[0]['votes'];

function sumNumbers($votes, $length)
{
    $sum = 0;
    $lastSum = 0; 
    foreach ($votes as $vote) {
    // var_dump($vote);
    $sum += $vote;
    }
    // var_dump($sum);
    $lastSum = $sum / $length;
    return number_format($lastSum, 0);
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack - 7</title>
</head>

<body>

    <?php for ($i = 0; $i < count($pupils); $i++) { ?>
        <p><strong>Alunno: </strong><?php echo $pupils[$i]['name'] . ' ' . $pupils[$i]['lastname'] ?></p>
        <p><strong>Media: </strong><?php echo sumNumbers($pupils[$i]['votes'], count($votes)); ?></p>

    <?php } ?>

</body>

</html>