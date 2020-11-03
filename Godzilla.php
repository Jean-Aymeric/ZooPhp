<?php


class Godzilla extends Reptile {

    public function __construct(string $name) {
        parent::__construct($name);
        $this->setFood("des villes");
    }

    public function eat() {
        print($this->getName() . " dévore et détruit " . $this->getFood() . "\n");
    }
}