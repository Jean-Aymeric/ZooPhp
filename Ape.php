<?php
include_once "Mammifer.php";

abstract class Ape extends Mammifer
{

    public function __construct(string $name, BehaviourSpeaking $behaviourSpeaking) {
        parent::__construct($name, $behaviourSpeaking);
        $this->setFood("banane");
    }
}