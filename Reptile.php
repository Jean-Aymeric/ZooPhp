<?php
include_once "Animal.php";

abstract class Reptile extends Animal {

    public function __construct(string $name) {
        parent::__construct($name);
        $this->setFood("viande");
    }

    public function speak(): void {
        print(parent::getName() . " : Grrrrr\n");
    }

}