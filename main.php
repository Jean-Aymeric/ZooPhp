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
include_once "Shark.php";

$zoo = new Zoo();
for ($i = 0; $i < 5; $i++) {
    $zoo->addAnimal(new Gorilla("Kong " . $i));
}
$zoo->addAnimal(new Chimpanzee("Le Bibliothécaire"));
$zoo->addAnimal(new Crocodile("Krok"));
$zoo->addAnimal(new Crocodile("Krak"));
$zoo->addAnimal(new GodZilla("GODZILLA"));
$zoo->addAnimal(new Shark("Claw"));

foreach ($zoo->getAnimals() as $animal) {
    //$animal->speak();
    $animal->eat();
}

print ("Il y a " . $zoo->getAnimalsCount() . " animaux dans le zoo.\n");