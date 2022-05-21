<?php


class Tomato extends AdditionDecorator
{

    public function cost(): float
    {
        return 45.5 + $this->pizza->cost();
    }

    public function getDescription(): string
    {
        print "And this is cool too";
        return $this->pizza->getDescription() . ' , Tomato';
    }
}