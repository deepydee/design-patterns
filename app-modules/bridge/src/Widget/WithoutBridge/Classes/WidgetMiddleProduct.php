<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithoutBridge\Classes;

use Modules\Bridge\Widget\Entities\Product;

class WidgetMiddleProduct extends WidgetAbstract
{
    public function run(Product $product): void
    {
        $viewData = $this->getRealizationLogic($product);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product): array
    {
        $id = $product->id;
        $middleTitle = $product->id.'->'.$product->name;
        $description = $product->description;

        return compact('id', 'middleTitle', 'description');
    }
}
