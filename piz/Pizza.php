<?php

declare(strict_types=1);

namespace LullDev\PizzaStore;

abstract class Pizza
{
    protected string $name;      // Название пиццы
    protected string $sauce;    // Соус
    protected array $toppings = []; // Ингредиенты

    public function prepare(): void
    {
        echo "Готовим: {$this->name}\n";
        echo "Добавляем соус: {$this->sauce}\n";
        echo "Топпинги: " . implode(", ", $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Режем пиццу треугольниками!\n";
    }
}
