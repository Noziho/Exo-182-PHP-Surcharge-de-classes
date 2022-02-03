<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require 'classes/Sorcier.php';

// Creation d'une instance de la classe Personnage
$humain = new Personnage();
$humain->setNom("Noah");

// Creation d'une instance de la classe Dragon
$dragon = new Dragon();
$dragon->setNom("Dragon");

// Creation d'une instance de la classe Princesse
$princesse = new Princesse();
$princesse->setNom("Princesse");
$princesse->setId(124);

$sorcier = new Sorcier();
$sorcier->setNom("Sorcier");
$sorcier->setId(12);

// Affichage des valeurs de Sorcier
echo "Nom: ".$sorcier->getNom()."<br>";
echo "Id: ".$sorcier->getId()."<br>";
echo "Y: ".$sorcier->getY()."<br>";
echo "X: ".$sorcier->getX()."<br>";
echo "Vie: ".$sorcier->getVie()."<br>";

echo "<br>";

//Affichage des valeurs de Princesse
echo "Nom: ".$princesse->getNom()."<br>";
echo "Id: ".$princesse->getId()."<br>";
echo "Y: ".$princesse->getY()."<br>";
echo "X: ".$princesse->getX()."<br>";





