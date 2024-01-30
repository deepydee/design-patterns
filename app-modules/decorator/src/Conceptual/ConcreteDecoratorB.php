<?php

declare(strict_types=1);

namespace Modules\Decorator\Conceptual;

/**
 * Декораторы могут выполнять своё поведение до или после вызова обёрнутого
 * объекта.
 */
class ConcreteDecoratorB extends Decorator
{
    /**
     * Декораторы могут вызывать родительскую реализацию операции, вместо того,
     * чтобы вызвать обёрнутый объект напрямую. Такой подход упрощает расширение
     * классов декораторов.
     */
    public function operation(): string
    {
        return 'ConcreteDecoratorB('.parent::operation().')';
    }
}
