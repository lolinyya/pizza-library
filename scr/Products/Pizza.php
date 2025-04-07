<?php
namespace PizzaLibrary\Products;

abstract class Pizza
{
    protected string $name = '';
    protected string $sauce = '';
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Готовим: {$this->name}\n";
        echo "Добавляем соус: {$this->sauce}\n";
        echo "Топпинги: " . implode(", ", $this->toppings) . "\n";
    }

    abstract public function bake(): void;
    
    public function cut(): void
    {
        echo "Режем пиццу треугольниками!\n";
    }
    
    public function box(): void
    {
        echo "Упаковываем в коробку\n";
    }
    
    public function getName(): string
    {
        return $this->name;
    }
}