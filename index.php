<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Mon premier code en POO en PHP</h1>
<?php

require('Voiture.php');

$mavoiture = new Voiture('Renault');
$mavoiture2 = new Voiture('Peugeot', 120);

echo 'Marque de ma voiture : ';
echo $mavoiture->marque;
echo $mavoiture2->marque;
$mavoiture->freiner(10.5);
?>
</body>
</html>


