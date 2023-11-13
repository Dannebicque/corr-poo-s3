<?php

class Bus extends Voiture
{
    protected int $nbPlaces;
    protected int $nbEssieux;

    public function __construct(
        string $marque,
        int $puissance,
        float $kilometrage,
        int $nbPlaces,
        int $nbEssieux)
    {
        parent::__construct($marque, $puissance, $kilometrage);
        $this->setNbPlaces($nbPlaces);//ou $this->nbPlaces = $nbPlaces;
        $this->setNbEssieux($nbEssieux);
    }

    public function afficherCaracteristiques(): string
    {
        $texte = parent::afficherCaracteristiques();
        $texte .= 'Nombre de places : '.$this->nbPlaces.'<br>';
        $texte .= 'Nombre d\'essieux : '.$this->nbEssieux.'<br>';
        return $texte;
    }

    public function setNbPlaces(int $nbPlaces): void
    {
        $this->nbPlaces = $nbPlaces;
    }

    public function setNbEssieux(int $nbEssieux): void
    {
        $this->nbEssieux = $nbEssieux;
    }


}
