<?php

class Auteur extends Individu
{
    public function __construct(string $nom, string $prenom)
    {
        parent::__construct($nom, $prenom, 'Auteur');
    }
}
