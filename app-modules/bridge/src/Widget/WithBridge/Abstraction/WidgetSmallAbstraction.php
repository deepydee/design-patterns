<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithBridge\Abstraction;

use Illuminate\Support\Str;
use Modules\Bridge\Widget\WithBridge\Contracts\WidgetRealization;

class WidgetSmallAbstraction extends WidgetAbstract
{
    public function run(WidgetRealization $realization): void
    {
        $this->setRealization($realization);

        $viewData = $this->getViewData();
        $this->viewLogic($viewData);
    }

    private function getViewData(): array
    {
        $id = $this->getRealization()->getId();
        $smallTitle = $this->getSmallTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'smallTitle', 'description');
    }

    /**
     * Не все обязательно должно быть реализовано в реализации
     * Абстракция оперирует реализацией
     */
    private function getSmallTitle(): string
    {
        return Str::limit($this->getRealization()->getTitle(), 5);
    }
}
