<?php

declare(strict_types=1);

namespace Modules\Dto;

/**
 * Немного усложняем - добавлены методы проедоставления информации
 */
final readonly class ProductDto2
{
    public function __construct(
        public int $id,
        public string $name,
        public int $categoryId,
    ) {
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
