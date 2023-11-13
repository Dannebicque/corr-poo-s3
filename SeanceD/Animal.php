<?php

class Animal
{
    public string $nom;
    public int $age;
    public int $ageTheorique;
    public array $regimeAlimentaire = [];
    public bool $vivant = true;
    //ou public string $etat = 'vivant';

    public function __construct(string $nom, int $age, int $ageTheorique)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->ageTheorique = $ageTheorique;
    }

    public function lire_informations(): string
    {
        $etatAnimal = $this->vivant ? 'vivant' : 'mort';
        return 'Nom : '.$this->nom.', Age : '.$this->age.', Etat : '.$etatAnimal.'<br>';
    }

    public function mange(string $aliment): void
    {
        if ($this->vivant === true) { //ou if ($this->etat === 'vivant')
            $this->regimeAlimentaire[] = $aliment; //array_push($this->regimeAlimentaire, $aliment);
        }
    }
    public function vieillir(int $nbannees = 1): void
    {
       $this->age += $nbannees;
         if ($this->age > $this->ageTheorique) {
              $this->vivant = false; //ou $this->etat = 'mort';
         }
    }
    public function lire_regime(): string
    {
        $regime = '';
        foreach ($this->regimeAlimentaire as $aliment) {
            $regime .= $aliment.', ';
        }
        return $regime;

        //ou return implode(', ', $this->regimeAlimentaire);
    }
}
