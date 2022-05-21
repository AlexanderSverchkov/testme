<?php


abstract class AdditionDecorator implements PizzaInterface
{
    protected ?PizzaInterface $pizza = null;

    public function __construct(
        PizzaInterface $pizza
    ) {
        $this->pizza = $pizza;
    }
}