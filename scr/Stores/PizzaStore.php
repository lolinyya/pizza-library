<?php

namespace PizzaLibrary\Stores;

use PizzaLibrary\Products\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->cut();

        return $pizza;
    }

    abstract protected function createPizza(string $type): Pizza;
}
