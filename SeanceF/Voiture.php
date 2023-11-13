<?php

interface VoitureInterface
{
    public function afficherCaracteristiques(): string;
}

class Voiture extends VehiculeAMoteur implements VoitureInterface
{
    protected string $marque;
    protected int $puissance;

    public function __construct(string $type, int $nbPlaces, string $marque, int $puissance)
    {
        parent::__construct($type, $nbPlaces);
        $this->marque = $marque;
        $this->puissance = $puissance;
    }

    public function afficherCaracteristiques(): string
    {
        $texte = 'Type de moteur : '.$this->typeMoteur.'<br>';
        $texte .= 'Nombre de passagers : '.$this->nbPassagers.'<br>';
        $texte .= 'Marque : '.$this->marque.'<br>';
        $texte .= 'Puissance : '.$this->puissance.'<br>';
        return $texte;
    }
}
