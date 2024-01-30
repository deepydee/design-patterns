<?php

declare(strict_types=1);

namespace Modules\Proxy\Conceptual;

use Modules\Proxy\Conceptual\Contracts\Subject;

/**
 * Интерфейс Заместителя идентичен интерфейсу Реального Субъекта.
 */
class Proxy implements Subject
{
    /**
     * Заместитель хранит ссылку на объект класса РеальныйСубъект. Клиент может
     * либо лениво загрузить его, либо передать Заместителю.
     */
    public function __construct(private RealSubject $realSubject)
    {
    }

    /**
     * Наиболее распространёнными областями применения паттерна Заместитель
     * являются ленивая загрузка, кэширование, контроль доступа, ведение журнала
     * и т.д. Заместитель может выполнить одну из этих задач, а затем, в
     * зависимости от результата, передать выполнение одноимённому методу в
     * связанном объекте класса Реального Субъект.
     */
    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }
    }

    private function checkAccess(): bool
    {
        // Некоторые реальные проверки должны проходить здесь.
        echo 'Proxy: Checking access prior to firing a real request.<br>';

        return true;
    }

    private function logAccess(): void
    {
        echo 'Proxy: Logging the time of request.<br>';
    }
}
