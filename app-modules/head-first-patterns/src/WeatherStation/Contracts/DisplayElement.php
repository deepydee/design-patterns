<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation\Contracts;

/**
 * Интерфейс DisplayElement содержит всего один метод display(),
 * который вызывается для отображения визуального элемента.
 */
interface DisplayElement
{
    public function display(): void;
}
