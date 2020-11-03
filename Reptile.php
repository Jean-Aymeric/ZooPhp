<?php
include_once "Animal.php";

abstract class Reptile extends Animal {
    public function speak(): void {
        print(parent::getName() . " : Grrrrr\n");
    }

}