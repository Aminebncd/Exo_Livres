<?php


class Livre {

    private string $titre;
    private DateTime $dateParution;
    private int $nombrePages; 
    private float $prix;   
    private Auteur $auteur;

    public function __construct(string $titre, int $anneeParution, int $nombrePages, float $prix, Auteur $auteur){
        $this->titre = $titre;
        $this->nombrePages = $nombrePages;
        $this->dateParution = new DateTime("$anneeParution-01-01");
        $this->prix = $prix;
        $this->auteur = $auteur;
        $auteur->addLivre($this); // Correction : appel de la méthode addLivre pour ajouter ce livre à l'auteur
    }
    
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNombrePages()
    {
        return $this->nombrePages;
    }

    public function setNombrePages($nombrePages)
    {
        $this->nombrePages = $nombrePages;

        return $this;
    }

    public function getDateParution()
    {
        return $this->dateParution;
    }

    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getInfos(){
        echo $this.": ".$this->getNombrePages()." pages / ".$this->getPrix()."€ ";
    }
    
    public function __toString(){
        return $this->getTitre()." ( ".$this->getDateParution()->format('Y').")";   
    }
}
