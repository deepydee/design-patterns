<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\PizzaStore;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Factories\ChicagoPizzaIngredientFactory;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Pizzas\CheesePizza;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Pizzas\ClamPizza;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Pizzas\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Pizzas\VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(PizzaType $type): Pizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        $pizza = null;

        switch ($type) {
            case PizzaType::CHEESE:
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('Chicago Style Cheese Pizza');
                break;
            case PizzaType::VEGGIE:
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('Chicago Style Veggie Pizza');
                break;
            case PizzaType::CLAM:
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('Chicago Style Clam Pizza');
                break;
            case PizzaType::PEPPERONI:
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('Chicago Style Pepperoni Pizza');
                break;
            default:
                throw new \InvalidArgumentException('Invalid pizza type');
        }

        return $pizza;
    }
}
