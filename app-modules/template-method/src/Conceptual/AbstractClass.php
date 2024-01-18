<?php

declare(strict_types=1);

namespace Modules\TemplateMethod\Conceptual;

/**
 * Абстрактный Класс определяет шаблонный метод, содержащий скелет некоторого
 * алгоритма, состоящего из вызовов (обычно) абстрактных примитивных операций.
 *
 * Конкретные подклассы должны реализовать эти операции, но оставить сам
 * шаблонный метод без изменений.
 */
abstract class AbstractClass
{
    /**
     * Шаблонный метод определяет скелет алгоритма.
     */
    final public function templateMethod(): void
    {
        $this->baseOperation1();
        $this->requiredOperations1();
        $this->baseOperation2();
        $this->hook1();
        $this->requiredOperation2();
        $this->baseOperation3();
        $this->hook2();
    }

    /**
     * Эти операции уже имеют реализации.
     */
    protected function baseOperation1(): void
    {
        echo 'AbstractClass says: I am doing the bulk of the work<br>';
    }

    protected function baseOperation2(): void
    {
        echo 'AbstractClass says: But I let subclasses override some operations<br>';
    }

    protected function baseOperation3(): void
    {
        echo 'AbstractClass says: But I am doing the bulk of the work anyway<br>';
    }

    /**
     * А эти операции должны быть реализованы в подклассах.
     */
    abstract protected function requiredOperations1(): void;

    abstract protected function requiredOperation2(): void;

    /**
     * Это «хуки». Подклассы могут переопределять их, но это не обязательно,
     * поскольку у хуков уже есть стандартная (но пустая) реализация. Хуки
     * предоставляют дополнительные точки расширения в некоторых критических
     * местах алгоритма.
     */
    protected function hook1(): void
    {
    }

    protected function hook2(): void
    {
    }
}
