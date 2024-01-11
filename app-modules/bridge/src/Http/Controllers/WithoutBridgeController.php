<?php

namespace Modules\Bridge\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Bridge\Widget\Entities\Category;
use Modules\Bridge\Widget\Entities\Product;
use Modules\Bridge\Widget\WithoutBridge\Classes\WidgetBigCategory;
use Modules\Bridge\Widget\WithoutBridge\Classes\WidgetBigProduct;
use Modules\Bridge\Widget\WithoutBridge\Classes\WidgetMiddleCategory;
use Modules\Bridge\Widget\WithoutBridge\Classes\WidgetMiddleProduct;
use Modules\Bridge\Widget\WithoutBridge\Classes\WidgetSmallCategory;
use Modules\Bridge\Widget\WithoutBridge\Classes\WidgetSmallProduct;

class WithoutBridgeController extends Controller
{
    public function __invoke()
    {
        $product = new Product();

        (new WidgetBigProduct())->run($product);
        (new WidgetMiddleProduct())->run($product);
        (new WidgetSmallProduct())->run($product);

        $category = new Category();

        (new WidgetBigCategory())->run($category);
        (new WidgetMiddleCategory())->run($category);
        (new WidgetSmallCategory())->run($category);
    }
}
