<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Models;

use Modules\Composite\OrderTotal\Contracts\CompositeItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Ingredient extends Model implements CompositeItem
{
    public string $type = 'Ingredient';

    public function calcPrice(): float
    {
        if ($this->price) {
            echo "[{$this->id}]  {$this->type}::{$this->name} ({$this->price})<br>";

            return $this->price;
        }

        $this->price = Arr::random([10, 20, 30, 40, 50]);

        echo "[{$this->id}]  {$this->type}::{$this->name} ({$this->price})<br>";

        return $this->price;
    }
}