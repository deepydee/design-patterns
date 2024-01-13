<?php

declare(strict_types=1);

namespace Modules\Dto;

use Illuminate\Http\Request;
use Modules\Dto\ProductDto;

final readonly class CreateProductDtoFactory
{
    public static function fromRequest(Request $request): ProductDto
    {
        return self::fromArray($request->validated());
    }

    public static function fromArray(array $data): ProductDto
    {
        return new ProductDto(
            id: $data['id'],
            name: $data['name'],
            categoryId: $data['categoryId'],
        );
    }
}
