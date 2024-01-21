<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\WeatherStation\Contracts;

/**
 * Интерфейс Observer
 * реализуется всеми наблюдателями; таким
 * образом, все наблюдатели должны реализовать метод update()
 */
interface Observer
{
    public function update(float $temp, float $humidity, float $pressure): void;
}
