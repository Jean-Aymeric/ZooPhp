<?php
include_once "Fish.php";

class Shark extends Fish {

    public function __construct(string $name) {
        parent::__construct($name);
        $this->setFood("poisson");
    }

}