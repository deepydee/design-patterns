<?php

declare(strict_types=1);

namespace Modules\Dto;

use Illuminate\Http\Request;

/**
 * Расширенное использование
 * Добавили мтоды создание класса
 */
final readonly class ProductDto4
{
    public function __construct(
        public int $id,
        public string $name,
        public int $categoryId,
    ) {
    }

    public static function createFromRequest(Request $request): self
    {
        return self::createFromArray($request->validated());
    }

    public static function createFromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            categoryId: $data['categoryId'],
        );
    }
}
