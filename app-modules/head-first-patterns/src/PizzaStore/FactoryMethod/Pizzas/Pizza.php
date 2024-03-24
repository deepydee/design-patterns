<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas;

abstract class Pizza
{
    protected string $name = 'Abstract Pizza';

    protected string $dough = 'Abstract Dough';

    protected string $sauce = 'Abstract Sauce';

    /** @var array<string> */
    protected array $toppings = [];

    public function prepare(): void
    {
        echo 'Preparing '.$this->name.'<br>';
        echo 'Tossing dough...'.'<br>';
        echo 'Adding sauce...'.'<br>';
        echo 'Adding toppings: '.implode(', ', $this->toppings).'<br>';
    }

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350'.'<br>';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices'.'<br>';
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box'.'<br>';
    }

    public function getName(): string
    {
        return $this->name;
    }
}
