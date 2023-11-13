<?php

abstract class Ouvrage implements OuvrageInterface
{
    protected string $titreOuvrage;
    protected DateTime $datePublication;
    protected string $genre;
    protected string $couverture;
    public static float $gainTotalLocation = 0;

    public function __construct(string $titreOuvrage, DateTime $datePublication, string $genre)
    {
        $this->titreOuvrage = $titreOuvrage;
        $this->datePublication = $datePublication;
        $this->genre = $genre;
        $this->couverture = 'https://placehold.co/200x300?text=' . $titreOuvrage;
    }

    public function afficher(): string
    {
        $html = '<div><img src="' . $this->couverture . '" alt="' . $this->titreOuvrage . '">';
        $html .= '<h5>' . $this->titreOuvrage . '</h5>';
        $html .= '<p>Date de publication : ' . $this->datePublication->format('d/m/Y') . '</p>';
        $html .= '<p>Genre : ' . $this->genre . '</p>';
        $html .= '</div>';

        return $html;
    }


}
