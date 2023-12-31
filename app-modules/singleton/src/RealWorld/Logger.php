<?php

declare(strict_types=1);

namespace Modules\Singleton\RealWorld;

use Modules\Singleton\Conceptual\Singleton;

/**
 * Класс ведения журнала является наиболее известным и похвальным использованием
 * паттерна Одиночка.
 */
class Logger extends Singleton
{
    /**
     * Ресурс указателя файла файла журнала.
     */
    private $fileHandle;

    /**
     * Поскольку конструктор Одиночки вызывается только один раз, постоянно
     * открыт всего лишь один файловый ресурс.
     *
     * Обратите внимание, что для простоты мы открываем здесь консольный поток
     * вместо фактического файла.
     */
    protected function __construct()
    {
        $this->fileHandle = fopen('php://stdout', 'w');
    }

    /**
     * Пишем запись в журнале в открытый файловый ресурс.
     */
    public function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->fileHandle, "$date: $message<br>");
    }

    /**
     * Просто удобный ярлык для уменьшения объёма кода, необходимого для
     * регистрации сообщений из клиентского кода.
     */
    public static function log(string $message): void
    {
        /** @var Logger $logger */
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}
