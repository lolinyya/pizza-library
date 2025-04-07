<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use LullDev\PizzaStore\Stores\NYPizzaStore;

// Создаем нью-йоркскую пиццерию
$nyPizzaStore = new NYPizzaStore();

echo "Добро пожаловать в нашу пиццерию!\n";

// Заказываем разные пиццы
$pizzaTypes = ['cheese', 'pepperoni', 'karbonara'];

foreach ($pizzaTypes as $type) {
    echo "Заказываем пиццу: $type\n";
    $nyPizzaStore->orderPizza($type);
}