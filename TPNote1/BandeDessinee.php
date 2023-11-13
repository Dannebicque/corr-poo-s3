<?php

class BandeDessinee extends Ouvrage implements LouerInterface
{
    protected array $auteurs = [];
    protected array $dessinateurs = [];
    protected int $nbPlanches;

    public function __construct(string $titreOuvrage, DateTime $datePublication, int $nbPlanches,)
    {
        parent::__construct($titreOuvrage, $datePublication, 'BD');
        $this->nbPlanches = $nbPlanches;
    }

    public function addAuteur(string $auteur): void
    {
        $this->auteurs[] = $auteur;
    }

    public function addDessinateur(string $dessinateur): void
    {
        $this->dessinateurs[] = $dessinateur;
    }

    public function afficher(): string
    {
        $html = '<div><img src="' . $this->couverture . '" alt="' . $this->titreOuvrage . '">';
        $html .= '<h5>' . $this->titreOuvrage . '</h5>';
        $html .= '<p>Date de publication : ' . $this->datePublication->format('d/m/Y') . '</p>';
        $html .= '<p>Genre : ' . $this->genre . '</p>';
        $html .= '<p>Nombre de planches : ' . $this->nbPlanches . '</p>';
        $html .= '<p>Auteur(s) : ' . implode(', ', $this->auteurs) . '</p>';
        $html .= '<p>Dessinateur(s) : ' . implode(', ', $this->dessinateurs) . '</p>';
        $html .= '</div>';

        return $html;
    }

    public function louer(int $duree): float
    {
        /**
         * - Si la durée est inférieure à 15 jours : 0,025 euros / page
         * - Si la durée est entre 16 jours et 30 jours : 10\% de majoration
         * - Au dela de 30 jours : 20\% de majoration du prix de base.
         */

        $prix = 0.025 * $this->nbPlanches;
        if ($duree > 15 && $duree <= 30) {
            $prix *= 1.1;
        } elseif ($duree > 30) {
            $prix *= 1.2;
        }

        self::$gainTotalLocation += $prix;

        return $prix;
    }

    public function getTitreOuvrage(): string
    {
        return $this->titreOuvrage;
    }
}
