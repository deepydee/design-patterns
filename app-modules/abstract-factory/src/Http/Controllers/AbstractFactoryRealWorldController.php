<?php

namespace Modules\AbstractFactory\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\AbstractFactory\RealWorld\Factories\PHP\PHPTemplateFactory;
use Modules\AbstractFactory\RealWorld\Factories\Twig\TwigTemplateFactory;
use Modules\AbstractFactory\RealWorld\Page;

/**
 * Паттерн Абстрактная Фабрика
 *
 * Назначение: Предоставляет интерфейс для создания семейств связанных или
 * зависимых объектов, без привязки к их конкретным классам.
 *
 * Пример: В этом примере паттерн Абстрактная Фабрика предоставляет
 * инфраструктуру для создания нескольких разновидностей шаблонов для одних и
 * тех же элементов веб-страницы.
 *
 * Чтобы веб-приложение могло поддерживать сразу несколько разных движков
 * рендеринга страниц, его классы должны работать с шаблонами только через
 * интерфейсы, не привязываясь к конкретным классам. Чтобы этого достичь,
 * объекты приложения не должны создавать шаблоны напрямую, а поручать создание
 * специальным объектам-фабрикам, с которыми тоже надо работать через
 * абстрактный интерфейс.
 *
 * Благодаря этому, вы можете подать в приложение фабрику, соответствующую
 * одному из движков рендеринга, зная, что с этого момента, все шаблоны будут
 * порождаться именно этой фабрикой, и будут соответствовать движку рендеринга
 * этой фабрики. Если вы захотите сменить движок рендеринга, то всё что нужно
 * будет сделать — это подать в приложение объект фабрики другого типа и ничего
 * при этом не сломается.
 */
class AbstractFactoryRealWorldController extends Controller
{
    public function __invoke()
    {
        /**
         * Теперь в других частях приложения клиентский код может принимать фабричные
         * объекты любого типа.
         */
        $page = new Page('Sample page', 'This it the body.');

        echo "Testing actual rendering with the PHPTemplate factory:\n";
        echo $page->render(new PHPTemplateFactory());

        // Можете убрать комментарии, если у вас установлен Twig.

        echo "Testing rendering with the Twig factory:\n";
        echo $page->render(new TwigTemplateFactory());
    }
}
