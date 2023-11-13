<?php

final class VoitureDeSport extends Voiture
{
/*
 * Propriété :
Nb de secondes de zéro à 100 km/h
Méthodes :
Le constructeur
Lirecaracteristiques() héritée de la classe Voiture et qui affiche en plus le nombre de secondes de zéro à cent.
 */
    protected float $nbSecondesDeZeroACent;

    public function __construct(string $type, int $nbPlaces, string $marque, int $puissance, float $nbSecondesDeZeroACent)
    {
        parent::__construct($type, $nbPlaces, $marque, $puissance);
        $this->nbSecondesDeZeroACent = $nbSecondesDeZeroACent;
    }

    public function afficherCaracteristiques(): string
    {
        $texte = parent::afficherCaracteristiques();
        $texte .= 'Nombre de secondes de zéro à cent : '.$this->nbSecondesDeZeroACent.'<br>';
        return $texte;
    }
}
