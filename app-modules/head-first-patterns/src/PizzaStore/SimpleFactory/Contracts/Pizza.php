<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Contracts;

interface Pizza
{
    public function prepare(): void;
    public function bake(): void;
    public function cut(): void;
    public function box(): void;
}
