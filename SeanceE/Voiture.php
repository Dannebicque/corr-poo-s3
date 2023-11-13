<?php

class Voiture extends Voiture
{
    protected string $type;

    public function __construct(string $marque, int $puissance, float $kilometrage, string $type)
    {
        parent::__construct($marque, $puissance, $kilometrage);
        $this->setType($type);
    }

    public function setType(string $type): void
    {
        if ($type === 'suv' || $type === 'berline' || $type === '4x4' || $type === 'break') {
        //if (in_array($type, ['suv', 'berline', '4x4', 'break']))
            $this->type = $type;
        } else {
            $this->type = '';
            echo 'Type inconnu<br>';
        }
    }

    public function lire_type(): string
    {
        return $this->type;
    }

    public function afficherCaracteristiques(): string
    {
        $texte = parent::afficherCaracteristiques();
        $texte .= 'Type : '.$this->type.'<br>';
        return $texte;
    }
}
