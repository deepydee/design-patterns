<?php

declare(strict_types=1);

namespace Modules\Proxy\RealWorld;

use Modules\Proxy\RealWorld\Contracts\Downloarer;

/**
 * Класс Заместителя – это попытка сделать загрузку более эффективной. Он
 * обёртывает реальный объект загрузчика и делегирует ему первые запросы на
 * скачивание. Затем результат кэшируется, что позволяет последующим вызовам
 * возвращать уже имеющийся файл вместо его повторной загрузки.
 */
class CachingDownloader implements Downloarer
{
    /**
     * @var string[]
     */
    private array $cache = [];

    public function __construct(private SimpleDownloader $downloader)
    {
    }

    public function download(string $url): string
    {
        if (! isset($this->cache[$url])) {
            echo 'CacheProxy MISS. ';
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo 'CacheProxy HIT. Retrieving result from cache.<br>';
        }

        return $this->cache[$url];
    }
}
