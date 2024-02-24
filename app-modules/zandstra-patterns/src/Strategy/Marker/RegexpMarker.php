<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Strategy\Marker;

class RegexpMarker extends Marker
{
    public function mark(string $response): bool
    {
        return preg_match($this->test, $response)  === 1;
    }
}
