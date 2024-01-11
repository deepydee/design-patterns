<?php

namespace Modules\Bridge\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Bridge\Widget\Entities\Category;
use Modules\Bridge\Widget\Entities\Product;
use Modules\Bridge\Widget\WithBridge\Abstraction\WidgetBigAbstraction;
use Modules\Bridge\Widget\WithBridge\Abstraction\WidgetMiddleAbstraction;
use Modules\Bridge\Widget\WithBridge\Abstraction\WidgetSmallAbstraction;
use Modules\Bridge\Widget\WithBridge\Realization\CategoryWidgetRealization;
use Modules\Bridge\Widget\WithBridge\Realization\ProductWidgetRealization;

class WithBridgeController extends Controller
{
    public function __invoke()
    {
        $productRealization = new ProductWidgetRealization(new Product());
        $categoryRealization = new CategoryWidgetRealization(new Category());

        $views = [
            new WidgetBigAbstraction(),
            new WidgetMiddleAbstraction(),
            new WidgetSmallAbstraction(),
        ];

        foreach ($views as $view) {
            $view->run($productRealization);
            $view->run($categoryRealization);
        }
    }
}
