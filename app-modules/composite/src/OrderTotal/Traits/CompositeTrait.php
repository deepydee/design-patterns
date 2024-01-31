<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Traits;

use Modules\Composite\OrderTotal\Contracts\CompositeItem;

trait CompositeTrait
{
    private ?float $price = null;
    protected string $name = '';
    private array $compositeItems = [];

    public function setChildItem(CompositeItem $item): void
    {
        $this->compositeItems[] = $item;
    }

    public function calcPrice(): float
    {
        if ($this->price) {
            return $this->price;
        }

        $this->price = 0;

        foreach ($this->compositeItems as $compositeItem) {
            /** @var CompositeItem $compositeItem */
            $this->price += $compositeItem->calcPrice();
        }

        echo "[{$this->id}]  {$this->type}::{$this->name} ({$this->price})<br>";

        return $this->price;
    }
}
