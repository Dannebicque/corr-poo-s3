<?php

class ConnexionSQL
{
    private string $adresseip;
    private string $nombase;
    private string $utilisateur;
    private string $mdp;

    public function __construct(
        string $adresseip,
        string $nombase,
        string $utilisateur,
        string $mdp)
    {
        $this->setAdresseip($adresseip);
        $this->nombase = $nombase;
        $this->utilisateur = $utilisateur;
        $this->mdp = $mdp;
    }

    public function setAdresseip(string $adresseip): void
    {
        if (filter_var($adresseip, FILTER_VALIDATE_IP) === false) {
            echo "Erreur sur l'IP";
            $this->adresseip = '';
        } else {
            $this->adresseip = $adresseip;
        }
    }

    public function lire_connexion() : string
    {
        return 'Serveur : '.$this->adresseip.', Base : '.$this->nombase.', Utilisateur : '.$this->utilisateur.'.<br>';
    }

    public function getAdresseip(): string
    {
        return $this->adresseip;
    }



    public function getNombase(): string
    {
        return $this->nombase;
    }

    public function setNombase(string $nombase): void
    {
        $this->nombase = $nombase;
    }

    public function getUtilisateur(): string
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(string $utilisateur): void
    {
        $this->utilisateur = $utilisateur;
    }

    public function getMdp(): string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;
    }


}
