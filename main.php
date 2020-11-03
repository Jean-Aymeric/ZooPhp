<?php
include_once "Animal.php";
include_once "Reptile.php";
include_once "Mammifer.php";
include_once "Fish.php";
include_once "Ape.php";
include_once "Gorilla.php";
include_once "Chimpanzee.php";
include_once "Crocodile.php";
include_once "Godzilla.php";
include_once "Zoo.php";

$zoo = new Zoo();
$zoo->addAnimal(new Gorilla("Kong"));
$zoo->addAnimal(new Chimpanzee("Le Bibliothécaire"));
$zoo->addAnimal(new Crocodile("Krok"));
$zoo->addAnimal(new Crocodile("Krak"));
$zoo->addAnimal(new GodZilla("GODZILLA"));

foreach ($zoo->getAnimals() as $animal) {
    $animal->speak();
}