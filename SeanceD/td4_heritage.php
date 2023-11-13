<?php
require_once('Animal.php');
require_once('Chien.php');

//créer l’instance $bestiole de la classe animal :
//Nom : ‘Une drôle de bête’, Age : 1, Age théorique maximum : 10, état : ‘vivant’

$bestiole = new Animal('Une drôle de bête', 1, 10);

// Appeler la méthode : mange(‘fruits’)
$bestiole->mange('fruits');
// Appeler la méthode : mange(‘légumes’)
$bestiole->mange('légumes');
// Appeler la méthode : lire_regime()
echo $bestiole->lire_regime();
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();
// Appeler la méthode : vieillir(4)
$bestiole->vieillir(4);
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();
// Appeler la méthode : vieillir(6)
$bestiole->vieillir(6);
// Appeler la méthode : lire_informations()
echo $bestiole->lire_informations();

/*
 * Créer l’instance $chien1 de la classe Chien :
Nom : 'Chien',
Age : 2,
Age théorique maximum : 20,
etat : ‘vivant’,
Nom familier : ‘Médor’
Appeler la méthode : seNomme() ;
Appeler la méthode : mange(‘viande)
Appeler la méthode : mange(‘croquettes)
Appeler la méthode : lire_regime()
Appeler la méthode : lire_informations() ;
 */
$chien1 = new Chien('Chien', 2, 20, 'Médor');
echo $chien1->seNomme();
$chien1->mange('viande');
$chien1->mange('croquettes');
echo $chien1->lire_regime();
echo $chien1->lire_informations();
