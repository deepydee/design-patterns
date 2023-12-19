<?php

declare(strict_types=1);

namespace Modules\Logistics\Entities;

use Modules\Logistics\Contrants\Transport;
use Modules\Logistics\Entities\Truck;

class RoadLogistics
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}
