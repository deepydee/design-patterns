<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Strategy\Question;

use Modules\ZandstraPatterns\Strategy\Marker\Marker;

abstract class Question
{
    public function __construct(
        protected string $prompt,
        protected Marker $marker,
    ) {
    }

    public function mark(string $response): bool
    {
        return $this->marker->mark($response);
    }
}
