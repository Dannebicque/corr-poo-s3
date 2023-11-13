<?php

abstract class VehiculeAMoteur
{
/*
 * Propriétés
Type de moteur (propriété encapsulée)
Nombre de passagers (propriété encapsulée)
Nombre de véhicules (propriété de la classe : Static)
Méthodes
Le constructeur
verificationtype($type) : cette méthode permet de vérifier que l’utilisateur de la classe utilisera bien le bon code pour la propriété Type moteur. Il vaut soit T, soit E. (T pour Thermique, E pour Electrique)
verificationnbpassagers($nombre) : cette méthode permet de vérifier que l’utilisateur de la classe affecte bien une valeur numérique (un entier) au nombre de passagers.
 */

    protected string $typeMoteur;
    protected int $nbPassagers;
    protected static int $nbVehicules = 0;

    public function __construct(string $typeMoteur, int $nbPassagers)
    {
        $this->verificationType($typeMoteur);
        $this->verificationNbPassagers($nbPassagers);
        self::$nbVehicules++;
    }

    private function verificationType(string $typeMoteur): void
    {
        if ($typeMoteur === 'T' || $typeMoteur === 'E') {
            $this->typeMoteur = $typeMoteur;
        } else {
            $this->typeMoteur = '';
            echo 'Type inconnu<br>';
        }
    }

    private function verificationNbPassagers(int $nbPassagers): void
    {
        $this->nbPassagers = $nbPassagers;
    }
}
