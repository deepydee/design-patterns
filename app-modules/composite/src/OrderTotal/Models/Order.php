<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Composite\OrderTotal\Contracts\Composite;
use Modules\Composite\OrderTotal\Traits\CompositeTrait;

class Order extends Model implements Composite
{
    use CompositeTrait;

    public string $type = 'Order';

    private $compositePriceRelations = [
        'products',
    ];
}
