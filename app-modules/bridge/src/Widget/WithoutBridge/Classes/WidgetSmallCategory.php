<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithoutBridge\Classes;

use Illuminate\Support\Str;
use Modules\Bridge\Widget\Entities\Category;

class WidgetSmallCategory extends WidgetAbstract
{
    public function run(Category $category): void
    {
        $viewData = $this->getRealizationLogic($category);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category): array
    {
        $id = $category->id;
        $fullTitle = Str::limit($category->title, 7);
        $description = $category->description;

        return compact('id', 'fullTitle', 'description');
    }
}
