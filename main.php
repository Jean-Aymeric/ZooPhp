<?php
include_once "Animal.php";
include_once "Reptile.php";

$reptile = new Reptile();
$reptile->setName("boa");
print($reptile->getName()."\n");
