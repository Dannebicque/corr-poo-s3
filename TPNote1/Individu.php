<?php

abstract class Individu
{
    protected string $nom;
    protected string $prenom;
    protected string $metier;

    public function __construct(string $nom, string $prenom, string $metier)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficher(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }
}
