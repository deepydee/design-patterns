<?php

declare(strict_types=1);

namespace Modules\Dto;

/**
 * Способ любителей ООП
 *
 * Инкапсуляция ради инкапсуляции
 *
 * Данный подхход преследует 2 цели:
 * 1. Создание неизменяемого объекта
 * 2. Реализация инкапсуляции
 *
 * Чтобы код был "чистым", класс должен скрывать данные и представлять поведение
 * Но в случае с DTO - этого не требуется. DTO - это всего лиши структура данных,
 * время жихни которой не должно быть долгим. Создали, передали в другую систему и все.
 */
final readonly class ProductDto3
{
    public function __construct(
        private int $id,
        private string $name,
        private int $categoryId,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'categoryId' => $this->categoryId,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}
