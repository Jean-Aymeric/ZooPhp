<?php
include_once "Mammifer.php";

abstract class Ape extends Mammifer
{

    public function __construct(string $name) {
        parent::__construct($name);
        $this->setFood("banane");
    }

    public function speak(): void {
        print(parent::getName() . " : Hou Hou\n");
    }
}