<?php


class Cheese extends AdditionDecorator
{
    public function cost(): float
    {
        return 90.5 + $this->pizza->cost();
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ' , Cheese';
    }
}