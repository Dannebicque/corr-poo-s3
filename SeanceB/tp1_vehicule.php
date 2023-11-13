<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Véhicule</title>
</head>
<body>
    <h1>Véhicule</h1>
    <?php require('Vehicule.php');

//    $voiture1 = new Vehicule();
//    $voiture1->marque = 'Renault';
//    $voiture1->puissance = 90;
//    $voiture1->kilometrage = 15000;

    $voiture1 = new Voiture('Renault', 90, 15000);
    $voiture2 = new Voiture('Peugeot', 100, 20000);
    echo $voiture1->afficherCaracteristiques2();
    $voiture2->afficherCaracteristiques();

    $voiture1->puissance = 110;
    $voiture1->afficherCaracteristiques();

    $voiture1->augmenterKilometrage(1500);
    $voiture1->afficherCaracteristiques();


    ?>
</body>
</html>
