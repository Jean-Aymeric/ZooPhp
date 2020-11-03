<?php
include_once "Animal.php";
include_once "Reptile.php";
include_once "Mammifer.php";
include_once "Fish.php";
include_once "Ape.php";
include_once "Gorilla.php";
include_once "Chimpanzee.php";

$gorille = new Gorilla();
$gorille->setName("Kong");
$chimpanzee = new Chimpanzee();
$chimpanzee->setName("Le Biliothécaire");

$gorille->speak();
$chimpanzee->speak();