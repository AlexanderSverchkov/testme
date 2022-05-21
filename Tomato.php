<?php


class Tomato extends AdditionDecorator
{

    public function cost(): float
    {
        return 45.5 + $this->pizza->cost();
    }

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . ' , Tomato';
    }
}