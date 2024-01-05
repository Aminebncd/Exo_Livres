

<h1>Exercice livres</h1>

<h3>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et
leurs auteurs respectifs.
</h3>

<p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un
auteur. Un auteur comporte un nom et un prénom. <br><br>
Une méthode toString() sera appréciée dans chacune de vos classes. <br> <br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie
complète d’un auteur :</p>

<h2>RESULTAT :</h2>



<?php

spl_autoload_register(function () {
    require('Livres.php');
    require('Auteur.php');
});


$exAuteur = new Auteur("amine", "bncd");

$livreUn = new Livre("test", 2010, "20", 5.25, $exAuteur);
$livreDeux = new Livre("testdeux", 2010, "20", 5.25, $exAuteur);
$livreTrois = new Livre("testtrois", 2010, "20", 5.25, $exAuteur);
$livreQuatre = new Livre("testquatre", 2010, "20", 5.25, $exAuteur);


$exAuteur->infosAuteur();


$stephenKing = new Auteur("Stephen", "King");

$livreCinq = new Livre("Ca", 1986, "1138",20, $stephenKing);
$livreSix = new Livre("Simetierre", 1983, "374", 15, $stephenKing);
$livreSept = new Livre("Le Fléau", 1978, "823", 14, $stephenKing);
$livreHuit = new Livre("Shining", 1977, "447", 16, $stephenKing);




echo "<br><br>";
$stephenKing->infosAuteur();








