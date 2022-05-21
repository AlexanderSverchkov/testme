<?php


class Tomato extends AdditionDecorator
{

    public function cost(): float
    {
        return 45.5 + $this->pizza->cost();
    }

    public function getDescription(): string
    {
        print "Anq is cool too from me to yo";
        print "Some new commits";
        return $this->pizza->getDescription() . ' , Tomato';
    }
}