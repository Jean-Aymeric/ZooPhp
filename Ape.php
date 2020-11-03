<?php
include_once "Mammifer.php";

abstract class Ape extends Mammifer
{
    public function speak(): void {
        print(parent::getName() . " : Hou Hou\n");
    }
}