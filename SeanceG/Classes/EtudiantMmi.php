<?php

final class EtudiantMmi extends Etudiant
{
    public function __construct(
        string          $nom,
        string          $prenom,
        string          $genre,
        string          $numetudiant,
        int             $age,
        private ?string $options = null)
    {
        parent::__construct($nom, $prenom, $genre, $numetudiant, 'MMI', $age);
    }

    public function quelleOption(): string
    {
        return 'je suis l\'option ' . $this->options;
    }

    public function changerOption(string $option): void
    {
        $this->options = $option;
    }

    public function sePresente(): string
    {
        return parent::sePresente() . ' et je suis l\'option ' . $this->options;
    }
}
