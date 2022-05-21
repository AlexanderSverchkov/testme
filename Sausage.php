<?php


class Sausage extends AdditionDecorator
{

    public function cost(): float
    {
        return 130 + $this->pizza->cost();
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ' , Sausage';
    }
}