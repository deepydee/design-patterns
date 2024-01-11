<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithBridge\Abstraction;

use Modules\Bridge\Widget\WithBridge\Contracts\WidgetRealization;

class WidgetAbstract
{
    protected WidgetRealization $realization;

    public function setRealization(WidgetRealization $realization): void
    {
        $this->realization = $realization;
    }

    public function getRealization(): WidgetRealization
    {
        return $this->realization;
    }

    protected function viewLogic(array $viewData): void
    {
        $method = class_basename(static::class) . '::' . __FUNCTION__;

        echo $method . ' <br>';

        echo '<pre>';
        print_r($viewData);
        echo '</pre>';
    }
}
