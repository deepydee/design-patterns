<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithBridge\Abstraction;

use Modules\Bridge\Widget\WithBridge\Contracts\WidgetRealization;

class WidgetBigAbstraction extends WidgetAbstract
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
        $fullTitle = $this->getFullTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'fullTitle', 'description');
    }

    /**
     * Не все обязательно должно быть реализовано в реализации
     * Абстракция оперирует реализацией
     */
    private function getFullTitle(): string
    {
        return $this->getRealization()->getId()
            .'::::'
            .$this->getRealization()->getTitle();
    }
}
