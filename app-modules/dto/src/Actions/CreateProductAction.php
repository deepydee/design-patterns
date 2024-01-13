<?php

declare(strict_types=1);

namespace Modules\Dto\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Modules\Dto\ProductDto;

final class CreateProductAction
{
    public function __invoke(ProductDto|Request $dto): User
    {
        return User::make($dto->toArray());
    }
}
