

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
    require('Livre.php');
    require('Auteur.php');
});


$exempleAuteur = new Auteur("amine", "bncd");

$livreUn = new Livre("test", 2010, "20", 5.25, $exempleAuteur);
$livreDeux = new Livre("test deux", 2010, "20", 5.25, $exempleAuteur);
$livreTrois = new Livre("test trois", 2010, "20", 5.25, $exempleAuteur);
$livreQuatre = new Livre("test quatre", 2010, "20", 5.25, $exempleAuteur);

echo $exempleAuteur->infosAuteur();




echo "<br><br>";

$stephenKing = new Auteur("Stephen", "King");

$livreCinq = new Livre("Ca", 1986, "1138",20, $stephenKing);
$livreSix = new Livre("Simetierre", 1983, "374", 15, $stephenKing);
$livreSept = new Livre("Le Fléau", 1978, "823", 14, $stephenKing);
$livreHuit = new Livre("Shining", 1977, "447", 16, $stephenKing);

echo $stephenKing->infosAuteur();








