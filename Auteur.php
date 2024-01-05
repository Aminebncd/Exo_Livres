<?php


class Auteur {

    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLivres()
    {
        return $this->livres;
    }

    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }

    public function addLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function infosAuteur(){
        echo "<h3>Livres de $this</h3>" . "<br>";
        
        foreach ($this->livres as $livre) {
            echo $livre->getInfos() . "<br>";
        }
    }

    public function __toString(){
        return $this->getNom()." ".$this->getPrenom();
    }
}
