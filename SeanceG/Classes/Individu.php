<?php

interface iHumain
{
    public function travailler(float $nombreheures): void;

    public function reposer(int $nombrejours): void;

    public function sePresente(): string;
}

abstract class Individu implements \iHumain
{
    protected float $revenu = 0;
    protected int $conges = 0;

    public function __construct(
        protected ?string $nom,
        protected ?string $prenom,
        protected ?string $genre
    )
    {
        //Syntaxe PHP 8
    }

    public function travailler(float $nombreheures): void
    {
        $this->revenu += $nombreheures * 9.5;
    }

    public function reposer(int $nombrejours): void
    {
        $this->conges += $nombrejours;
    }

    public function declareSalaire(): string
    {
        return $this->sePresente() . ' et j\'ai gagné' . $this->revenu . ' euros';
    }

    public function sePresente(): string
    {
        return 'Je m\'appelle ' . $this->nom . ' ' . $this->prenom;
    }

    public function RAZrevenu(): void
    {
        $this->revenu = 0;
    }

    public function RAZconges(): void
    {
        $this->conges = 0;
    }
}
