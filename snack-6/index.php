<?php
/* 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde.

*/

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Snack - 6 </title>
    <style>
        .grey_teachers {
            background-color: grey;
        }

        .green_pm {
            background-color: green;
        }
    </style>
</head>

<body>

    <?php foreach ($db as $key => $values) : ?>
        <section style="background-color: <?php echo ($key === 'teachers') ? 'grey' : 'green' ?>">
            <h2><?php echo $key ?></h2>

            <ul>
                <?php foreach ($values as $value) : ?>
                    <li><?php echo $value['name'] . ' ' . $value['lastname'] ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endforeach; ?>

</body>

</html>