<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Strategy\Marker;

class MatchMarker extends Marker
{
    public function mark(string $response): bool
    {
        return $this->test === $response;
    }
}
