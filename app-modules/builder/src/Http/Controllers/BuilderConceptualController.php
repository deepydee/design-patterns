<?php

declare(strict_types=1);

namespace Modules\Builder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Builder\Conceptual\Builders\ConcreteBuilder1;
use Modules\Builder\Conceptual\Director;

/**
 * Паттерн Строитель
 *
 * Назначение: Позволяет создавать сложные объекты пошагово. Строитель даёт
 * возможность использовать один и тот же код строительства для получения разных
 * представлений объектов.
 */
class BuilderConceptualController extends Controller
{
    public function __invoke(Director $director)
    {
        $this->clientCode($director);
    }

    /**
     * Клиентский код создаёт объект-строитель, передаёт его директору, а затем
     * инициирует процесс построения. Конечный результат извлекается из объекта-
     * строителя.
     */
    private function clientCode(Director $director): void
    {
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        echo "Standard basic product:<br>";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "Standard full featured product:<br>";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        // Помните, что паттерн Строитель можно использовать без класса Директор.
        echo "Custom product:<br>";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}
