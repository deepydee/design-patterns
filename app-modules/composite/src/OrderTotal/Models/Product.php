<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Models;

use Modules\Composite\OrderTotal\Contracts\Composite;
use Modules\Composite\OrderTotal\Traits\CompositeTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Composite
{
    use CompositeTrait;

    public string $type = 'Product';

    private $compositePriceRelations = [
        'ingredients',
    ];
}
