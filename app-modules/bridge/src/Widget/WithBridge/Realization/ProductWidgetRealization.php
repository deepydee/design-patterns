<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithBridge\Realization;

use Modules\Bridge\Widget\Entities\Product;
use Modules\Bridge\Widget\WithBridge\Contracts\WidgetRealization;

class ProductWidgetRealization implements WidgetRealization
{
    public function __construct(private Product $product)
    {
    }

    public function getId(): int
    {
        return $this->product->id;
    }

    public function getTitle(): string
    {
        return $this->product->name;
    }

    public function getDescription(): string
    {
        return $this->product->description;
    }
}
