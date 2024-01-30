<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Conceptual\Products;

use Modules\AbstractFactory\Conceptual\Contracts\AbstractProductA;
use Modules\AbstractFactory\Conceptual\Contracts\AbstractProductB;

/**
 * Конкретные продукты создаются соответствующими Конкретными Фабриками.
 */
final class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return 'The result of the product B2.';
    }

    /**
     * Продукт B2 может корректно работать только с Продуктом A1. Тем не менее,
     * он принимает любой экземпляр Абстрактного Продукта А в качестве
     * аргумента.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with the ({$result})";
    }
}
