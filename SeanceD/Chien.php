<?php

class Chien extends Animal
{
    public $nomFamilier = '';

    public function __construct(string $nom, int $age, int $ageTheorique, string $nomFamilier)
    {
        parent::__construct($nom, $age, $ageTheorique);
        $this->nomFamilier = $nomFamilier;
    }

    public function lire_informations(): string
    {
        return parent::lire_informations().'Nom familier : '.$this->nomFamilier.'<br>';
    }

    public function seNomme(): string
    {
        return 'Je m\'appelle '.$this->nomFamilier.'<br>';
    }
}
