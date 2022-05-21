<?php


class Sausage extends AdditionDecorator
{

    public function cost(): float
    {
        return 130 + $this->pizza->cost();
    }

    public function getDescription(): string
    {
        print "That is cool";
        return $this->pizza->getDescription() . ' , Sausage';
    }
}