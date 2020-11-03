<?php
abstract class Animal
{
    private string $name;

    public function __construct(string $name) {
        $this->setName($name);
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public abstract function speak(): void;
}