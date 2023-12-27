<?php

declare(strict_types=1);

namespace Modules\Logistics\Contrants;

interface Transport
{
    public function deliver(): void;
}
