<?php
spl_autoload_register(function ($className) {
    require $className . '.php';
});

$pizza = new ThickDough();
$pizza = new Sausage(new Paper($pizza));
print $pizza->getDescription();