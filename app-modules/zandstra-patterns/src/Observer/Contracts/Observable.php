<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Observer\Contracts;

use Modules\ZandstraPatterns\Observer\Contracts\Observer;

interface Observable
{
    public function attach(Observer $observer): void;

    public function detach(Observer $observer): void;

    public function notify(): void;

}
