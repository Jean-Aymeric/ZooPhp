<?php
include_once "Ape.php";

class Gorilla extends Ape {
    public function speak(): void {
        print(parent::getName() . " : HOU HOU !!!\n");
    }
}