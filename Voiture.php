<?php

class Voiture
{
    public string $marque;
    public float $puissance;

    public function __construct(string $arg1, float $puissance = 100)
    {
        $this->marque = $arg1;
        $this->puissance = $puissance;
    }

    function freiner(float $forceDeFreinage): void
    {
        //code de la fonction
        echo $forceDeFreinage;
    }
}
