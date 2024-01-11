<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithoutBridge\Classes;

use Illuminate\Support\Str;
use Modules\Bridge\Widget\Entities\Product;

class WidgetSmallProduct extends WidgetAbstract
{
    public function run(Product $product): void
    {
        $viewData = $this->getRealizationLogic($product);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product): array
    {
        $id = $product->id;
        $smallTitle = Str::limit($product->name, 7);
        $description = $product->description;

        return compact('id', 'smallTitle', 'description');
    }
}
