<?php

class Vehicule
{
    public string $marque;
    public int $puissance;
    public float $kilometrage = 10;

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

    public function afficherCaracteristiques(): void
    {
    echo 'Marque : '.$this->marque.'<br>';
    echo '.Puissance : '.$this->puissance.'<br>';
    echo 'Kilométrage : '.$this->kilometrage.'<br><hr>';
    }

    public function afficherCaracteristiques2(): string
    {
        $texte = "Marque : $this->marque<br>";
        $texte .= "Puissance : $this->puissance<br>";
        $texte .= "Kilométrage : $this->kilometrage<br><hr>";

        return $texte;
    }
}
