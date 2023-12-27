<?php

namespace Modules\Singleton\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Singleton\RealWorld\Config;
use Modules\Singleton\RealWorld\Logger;

class SingletonRealWorldController extends Controller
{
    /**
     * Паттерн Одиночка
     *
     * Назначение: Гарантирует, что у класса есть только один экземпляр, и
     * предоставляет к нему глобальную точку доступа.
     *
     * Пример: Паттерн Одиночка печально известен тем, что ограничивает повторное
     * использование кода и усложняет модульное тестирование. Несмотря на это, он
     * всё же очень полезен в некоторых случаях. В частности, он удобен, когда
     * необходимо контролировать некоторые общие ресурсы. Например, глобальный
     * объект логирования, который должен управлять доступом к файлу журнала. Еще
     * один хороший пример: совместно используемое хранилище конфигурации среды
     * выполнения.
     */
    public function __invoke()
    {
        Logger::log('Started!');

        // Сравниваем значения одиночки-Логгера.
        $l1 = Logger::getInstance();
        $l2 = Logger::getInstance();

        if ($l1 === $l2) {
            Logger::log('Logger has a single instance.');
        } else {
            Logger::log('Loggers are different.');
        }

        /**
         * Проверяем, как одиночка-Конфигурация сохраняет данные...
         * @var Config $config1
         */
        $config1 = Config::getInstance();

        $login = 'test_login';
        $password = 'test_password';

        $config1->setValue('login', $login);
        $config1->setValue('password', $password);

        /**
         * ...и восстанавливает их.
         * @var Config $config2
         */
        $config2 = Config::getInstance();

        if ($login == $config2->getValue('login') &&
            $password == $config2->getValue('password')
        ) {
            Logger::log('Config singleton also works fine.');
        }

        Logger::log('Finished!');
    }
}
