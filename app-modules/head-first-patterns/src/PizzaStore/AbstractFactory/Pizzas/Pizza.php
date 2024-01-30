<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Pizzas;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Cheese;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Clams;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Dough;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Pepperoni;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Sauce;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Veggies;

abstract class Pizza
{
    protected string $name;
    protected Dough $dough;
    protected Sauce $sauce;

    /** @var Veggies[] */
    protected array $veggies;
    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clams $clam;

    abstract function prepare(): void;

    public function bake(): void
    {
        echo "Bake for 25 minutes at 350<br>";
    }

    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices<br>";
    }

    public function box(): void
    {
        echo "Place pizza in official PizzaStore box<br>";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function toString()
    {

    }
}
