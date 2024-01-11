<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithBridge\Abstraction;

use Modules\Bridge\Widget\WithBridge\Contracts\WidgetRealization;

class WidgetMiddleAbstraction extends WidgetAbstract
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
        $middleTitle = $this->getMiddleTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'middleTitle', 'description');
    }

    /**
     * Не все обязательно должно быть реализовано в реализации
     * Абстракция оперирует реализацией
     */
    private function getMiddleTitle(): string
    {
        return $this->getRealization()->getId()
            . '->'
            . $this->getRealization()->getTitle();
    }
}
