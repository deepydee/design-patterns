<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Models;

use Modules\Composite\OrderTotal\Contracts\Composite;
use Modules\Composite\OrderTotal\Traits\CompositeTrait;
use Illuminate\Database\Eloquent\Model;

class Order extends Model implements Composite
{
    use CompositeTrait;

    public string $type = 'Order';

    private $compositePriceRelations = [
        'products',
    ];
}
