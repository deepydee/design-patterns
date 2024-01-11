<?php

declare(strict_types=1);

namespace Modules\Bridge\Widget\WithBridge\Contracts;

interface WidgetRealization
{
    public function getId(): int;
    public function getTitle(): string;
    public function getDescription(): string;
}
