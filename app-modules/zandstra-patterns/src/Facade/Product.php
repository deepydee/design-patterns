<?php

namespace Modules\ZandstraPatterns\Facade;

class Product
{
    public function __construct(public string $id, public string $name)
    {
    }
}
