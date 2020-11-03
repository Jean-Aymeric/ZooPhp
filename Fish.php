<?php
include_once "Animal.php";

abstract class Fish extends Animal {
    public function speak(): void {
        print(parent::getName() . " : °oO°oO\n");
    }

}