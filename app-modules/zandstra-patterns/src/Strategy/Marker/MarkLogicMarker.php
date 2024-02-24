<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Strategy\Marker;

use Modules\ZandstraPatterns\Strategy\MarkerParse;

class MarkLogicMarker extends Marker
{
    private MarkerParse $engine;

    public function __construct(string $test)
    {
        parent::__construct($test);
        $this->engine = new MarkerParse($test);
    }

    public function mark(string $response): bool
    {
        return $this->engine->evaluate($response);
    }
}
