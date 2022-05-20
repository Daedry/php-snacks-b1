<!-- 
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php 

// var_dump($_GET);
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$findSanil = '@';
$findDot = '.';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Snack - 2 </title>
</head>
<body>

   <?php if(strlen($name) > 3 && strpos($email, $findSanil) && strpos($email, $findDot) && is_numeric($age)): ?>
      <h3>Accesso Riuscito.</h3>
      <p>Ben Trovato <?php echo $name; ?></p>
    <?php else: ?>
        <h3>Accesso Negato.</h3>
    <?php endif ?>

</body>
</html>