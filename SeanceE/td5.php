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
<?php
require_once('Vehicule.php');
require_once('Voiture.php');
require_once('Bus.php');

$voiture = new Voiture('Peugeot', 100, 10000, 'suv');
echo $voiture->afficherCaracteristiques();
$voiture->augmenterKilometrage(100);
echo $voiture->afficherCaracteristiques();

$voiture2 = new Voiture('Renault', 200, 20000, 'monospace');
echo $voiture2->afficherCaracteristiques();

$bus = new Bus('Mercedes', 300, 30000, 50, 3);
echo $bus->afficherCaracteristiques();
?>
</body>
</html>


