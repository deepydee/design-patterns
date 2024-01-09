<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Gui;

use Modules\AbstractFactory\Gui\Contracts\GuiFactory;
use Modules\AbstractFactory\Gui\Enums\KitType;
use Modules\AbstractFactory\Gui\Factories\BootstrapFactory;
use Modules\AbstractFactory\Gui\Factories\SemanticUIFactory;

class GuiKitFactory
{
    public function getFactory(KitType $type): GuiFactory
    {
        return match ($type) {
            KitType::Bootstrap => new BootstrapFactory(),
            KitType::Semanticui => new SemanticUIFactory(),
            default => throw new \InvalidArgumentException('Unknown kit type: ' . $type),
        };
    }
}
