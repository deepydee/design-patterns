<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithBridge\Realization;

use Modules\Bridge\Widget\Entities\Category;
use Modules\Bridge\Widget\WithBridge\Contracts\WidgetRealization;

class CategoryWidgetRealization implements WidgetRealization
{
    public function __construct(private Category $category)
    {
    }

    public function getId(): int
    {
        return $this->category->id;
    }

    public function getTitle(): string
    {
        return $this->category->title;
    }

    public function getDescription(): string
    {
        return $this->category->description;
    }
}
