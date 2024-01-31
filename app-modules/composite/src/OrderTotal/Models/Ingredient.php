<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Composite\OrderTotal\Contracts\CompositeItem;

class Ingredient extends Model implements CompositeItem
{
    public string $type = 'Ingredient';
    public int $price;
    public string $name;

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
