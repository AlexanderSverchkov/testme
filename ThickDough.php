<?php


class ThickDough extends Dough
{
    protected string $description = "Thick pizza";

    public function cost(): float
    {
        return 140;
    }

}