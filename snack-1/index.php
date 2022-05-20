<!-- 
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->

<?php

$basket_matches = [
    [
        'home' => 'Miami Heat',
        'guest' => 'Boston Celtics',
        'home_points' => '118',
        'guest_points' => '107',
    ],
    [
        'home' => 'Golden State Warrior',
        'guest' => 'Dallas Mavericks',
        'home_points' => '112',
        'guest_points' => '87',
    ],
    [
        'home' => 'Indiana Pacers',
        'guest' => 'Philadelphia 76ers',
        'home_points' => '122',
        'guest_points' => '131',
    ],
    [
        'home' => 'Orlando Magic',
        'guest' => 'Cleveland Cavaliers',
        'home_points' => '120',
        'guest_points' => '115',
    ],
    [
        'home' => 'Chicago Bulls',
        'guest' => 'Milwaukee Bucks',
        'home_points' => '106',
        'guest_points' => '127',
    ],
]


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Snack - 1 </title>
</head>

<body>

    <?php for ($i = 0; $i < 5; $i++) { ?>
        <h5> 
            <?php echo  $basket_matches[$i]['home']; ?> - <?php echo $basket_matches[$i]['guest']; ?>
            | <?php echo $basket_matches[$i]['home_points']; ?>-<?php echo $basket_matches[$i]['guest_points']; ?>
        </h5>
    <?php } ?>

</body>

</html>