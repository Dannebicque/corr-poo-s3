<?php

class VoitureTourisme extends Voiture
{
/*
 * Propriétés :
Consommation en litres pour 100 kilomètres.
Kilométrage.
Méthodes :
Le constructeur
Lirecaracteristiques() héritée de la classe Voiture et qui retourne en plus la consommation et le kilométrage.
utiliser($distance) : incrémente le kilométrage dun nombre de kilomètres donné en argument ($distance)
 */

    protected float $consommation;
    protected float $kilometrage = 0.0;

    public function __construct(string $type, int $nbPlaces, string $marque, int $puissance, float $consommation)
    {
        parent::__construct($type, $nbPlaces, $marque, $puissance);
        $this->consommation = $consommation;
    }

    public function afficherCaracteristiques(): string
    {
        $texte = parent::afficherCaracteristiques();
        $texte .= 'Consommation : '.$this->consommation.'<br>';
        $texte .= 'Kilométrage : '.$this->kilometrage.'<br>';
        return $texte;
    }

    public function utiliser(float $distance): void
    {
        $this->kilometrage += $distance;
    }
}
