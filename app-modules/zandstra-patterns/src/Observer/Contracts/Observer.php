<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Observer\Contracts;

use Modules\ZandstraPatterns\Observer\Contracts\Observable;

interface Observer
{
    public function update(Observable $observable): void;
}
