<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithoutBridge\Classes;

use Modules\Bridge\Widget\Entities\Category;

class WidgetMiddleCategory extends WidgetAbstract
{
    public function run(Category $category): void
    {
        $viewData = $this->getRealizationLogic($category);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category): array
    {
        $id = $category->id;
        $fullTitle = $category->id.'->'.$category->title;
        $description = $category->description;

        return compact('id', 'fullTitle', 'description');
    }
}
