<?php

class Etudiant extends Individu
{
    protected string $resultat = 'non défini';
    private static int $nbEtudiants = 0;

    public function __construct(
        string           $nom,
        string           $prenom,
        string           $genre,
        protected string $numetudiant,
        protected string $formation,
        protected int    $age
    )
    {
        parent::__construct($nom, $prenom, $genre);
        self::$nbEtudiants++;
    }

    public function __toString()
    {
        return 'Affichage de l\'étudiant' . $this->nom . ' ' . $this->prenom . '<br>';
    }

    public static function getNombreIndividus(): int
    {
        return self::$nbEtudiants;
    }

    public function travailler(float $nombreheures): void
    {
        if ($this->age < 18) {
            $this->revenu += $nombreheures * 9.5 * 0.8;
        } else {
            $this->revenu += $nombreheures * 9.5;
        }
    }

    

    public function evaluer($noteExamen): void
    {
        if ($noteExamen >= 10) {
            $this->resultat = 'admis';
        } else {
            $this->resultat = 'ajourné';
        }
    }

    public function sePresente(): string
    {
        return parent::sePresente() . ' et je suis étudiant en ' . $this->formation;
    }
}
