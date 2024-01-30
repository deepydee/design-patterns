<?php

declare(strict_types=1);

namespace Modules\Dto\Services;

use App\Models\User;
use Modules\Dto\ProductDto;

final class CreateProductService
{
    public function run(ProductDto $dto): User
    {
        return User::create($dto->toArray());
    }
}
