<?php

declare(strict_types=1);

namespace Modules\TemplateMethod\RealWorld\Traits;

trait Utils
{
    /**
     * Небольшая вспомогательная функция, которая делает время ожидания похожим на
     * реальность.
     */
    protected function simulateNetworkLatency(): void
    {
        $i = 0;

        while ($i < 5) {
            echo '.';
            sleep(1);
            $i++;
        }
    }
}
