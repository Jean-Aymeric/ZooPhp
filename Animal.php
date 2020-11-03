<?php
abstract class Animal
{
    private string $name;
    private string $food;

    public function __construct(string $name) {
        $this->setName($name);
        $this ->setFood("inconnu");
    }

    public function getFood(): string {
        return $this->food;
    }

    public function setFood(string $food): void {
        $this->food = $food;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public abstract function speak(): void;

    public function eat() {
        print($this->getName() . " mange " . $this->getFood() . "\n");
    }
}