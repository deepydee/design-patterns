<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithoutBridge\Classes;

class WidgetAbstract
{
    /**
     * Общий метод отрисовки виджета
     * @param array $viewData
     * @return void
     */
    protected function viewLogic(array $viewData): void
    {
        $method = class_basename(static::class) . '::' . __FUNCTION__;

        echo $method . ' <br>';

        echo '<pre>';
        print_r($viewData);
        echo '</pre>';
    }
}
