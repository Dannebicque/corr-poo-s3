<?php

class Vehicule
{
    protected string $marque;
    protected int $puissance;
    protected float $kilometrage = 10;

    public function __construct(string $marque, int $puissance, float $kilometrage)
    {
        $this->marque = $marque;
        $this->puissance = $puissance;
        $this->kilometrage = $kilometrage;
    }


    public function augmenterKilometrage(float $nbKilometre): void
    {
        $this->kilometrage += $nbKilometre;
    }

    public function afficherCaracteristiques(): string
    {
        $texte = "Marque : $this->marque<br>";
        $texte .= "Puissance : $this->puissance<br>";
        $texte .= "Kilométrage : $this->kilometrage<br><hr>";

        return $texte;
    }
}
