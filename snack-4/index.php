<!--  
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta
-->

<?php
function getRandomNumbers($min, $max, $length)
{
    $numbers = [];

    while (count($numbers) < $length) {
        $randomNumber = rand($min, $max);

        if (!in_array($randomNumber, $numbers)) {
            echo $numbers[] = $randomNumber;
        }
        return $numbers;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Snack - 4 </title>
</head>

<body>
<?php for($i = 0; $i < 15; $i++){ ?>
    <p><strong>Number<?php echo $i; ?></strong>: <?php getRandomNumbers(0, 100, 15) ?></p>

<?php } ?>




</body>

</html>