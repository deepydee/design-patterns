<?php

declare(strict_types=1);

namespace Modules\Logistics\Entities;

use Modules\Logistics\Contrants\Transport;
use Modules\Logistics\Entities\Ship;

class SeaLogistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}
