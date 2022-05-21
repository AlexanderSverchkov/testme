<?php


abstract class Dough implements PizzaInterface
{
    protected string $description;
    abstract public function cost(): float;

    public function getDescription(): string
    {
        return $this->description;
    }

}