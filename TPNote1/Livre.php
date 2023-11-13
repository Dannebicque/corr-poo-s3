<?php

class Livre extends Ouvrage implements LouerInterface
{
    protected array $auteurs = [];
    protected int $nbPages;
    protected string $genreLivre;

    public function __construct(string $titreOuvrage, DateTime $datePublication, int $nbPages, string $genreLivre)
    {
        parent::__construct($titreOuvrage, $datePublication, 'Livre');
        $this->nbPages = $nbPages;
        $this->genreLivre = $genreLivre;
    }

    public function addAuteur(Auteur ...$auteurs): void
    {
        var_dump($auteurs);
        foreach ($auteurs as $auteur) {
            $this->auteurs[] = $auteur;
        }
    }

    public function afficher(): string
    {
        $html = '<div><img src="' . $this->couverture . '" alt="' . $this->titreOuvrage . '">';
        $html .= '<h5>' . $this->titreOuvrage . '</h5>';
        $html .= '<p>Date de publication : ' . $this->datePublication->format('d/m/Y') . '</p>';
        $html .= '<p>Genre : ' . $this->genreLivre . '</p>';
        $html .= '<p>Nombre de pages : ' . $this->nbPages . '</p>';
        $html .= '<p>Auteur(s) : ';

        foreach ($this->auteurs as $auteur) {
            $html .= $auteur->afficher() . ', ';
        }

        $html .= '</p>';
        $html .= '</div>';

        return $html;
    }

    public function louer(int $duree): float
    {
        /*
         *  Si la durée est inférieure à 15 jours : 0,01 euros / page
- Si la durée est entre 16 jours et 30 jours : 10\% de majoration
- Au dela de 30 jours : 20\% de majoration du prix de base.
- Si le livre fait plus de 500 pages, réduction de 12\% de tous les tarifs.
         */

        $prix = 0.01 * $this->nbPages;
        if ($duree > 15 && $duree <= 30) {
            $prix *= 1.1;
        } elseif ($duree > 30) {
            $prix *= 1.2;
        }

        if ($this->nbPages > 500) {
            $prix *= 0.88;
        }

        self::$gainTotalLocation += $prix;

        return $prix;
    }

    public function getTitreOuvrage(): string
    {
        return $this->titreOuvrage;
    }
}
