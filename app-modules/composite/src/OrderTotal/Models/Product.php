<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Composite\OrderTotal\Contracts\Composite;
use Modules\Composite\OrderTotal\Traits\CompositeTrait;

class Product extends Model implements Composite
{
    use CompositeTrait;

    public string $type = 'Product';

    private $compositePriceRelations = [
        'ingredients',
    ];
}
