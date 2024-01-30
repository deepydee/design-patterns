<?php

declare(strict_types=1);

namespace Modules\Flyweight\RealWorld;

/**
 * Контекст хранит данные, уникальные для каждой кошки.
 *
 * Создавать отдельный класс для хранения контекста необязательно и не всегда
 * целесообразно. Контекст может храниться внутри громоздкой структуры данных в
 * коде Клиента и при необходимости передаваться в методы легковеса.
 */
readonly class Cat
{
    public function __construct(
        private string $name,
        private string $age,
        private string $owner,
        private CatVariation $variation,
    ) {
    }

    /**
     * Поскольку объекты Контекста не владеют всем своим состоянием, иногда для
     * удобства вы можете реализовать несколько вспомогательных методов
     * (например, для сравнения нескольких объектов Контекста между собой).
     */
    public function matches(array $query): bool
    {
        foreach ($query as $key => $value) {
            if (property_exists($this, $key)) {
                if ($value !== $this->$key) {
                    return false;
                }
            } elseif (property_exists($this->variation, $key)) {
                if ($value !== $this->variation->$key) {
                    return false;
                }
            } else {
                return false;
            }
        }

        return true;
    }

    /**
     * Кроме того, Контекст может определять несколько методов быстрого доступа,
     * которые делегируют исполнение объекту-Легковесу. Эти методы могут быть
     * остатками реальных методов, извлечённых в класс Легковеса во время
     * массивного рефакторинга к паттерну Легковес.
     */
    public function render(): void
    {
        $this->variation->renderProfile($this->name, $this->age, $this->owner);
    }
}
