<?php

declare(strict_types=1);

namespace Modules\Proxy\RealWorld;

use Modules\Proxy\RealWorld\Contracts\Downloarer;

/**
 * Реальный Субъект делает реальную работу, хотя и не самым эффективным
 * способом. Когда клиент пытается загрузить тот же самый файл во второй раз,
 * наш загрузчик именно это и делает, вместо того, чтобы извлечь результат из
 * кэша.
 */
class SimpleDownloader implements Downloarer
{
    public function download(string $url): string
    {
        echo "Downloading a file from the Internet.<br>";
        $result = file_get_contents($url);
        echo "Downloaded bytes: " . strlen($result) . "<br>";

        return $result;
    }
}
