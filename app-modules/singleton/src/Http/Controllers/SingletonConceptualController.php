<?php

declare(strict_types=1);

namespace Modules\Singleton\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Singleton\Conceptual\Singleton;

class SingletonConceptualController extends Controller
{
    /**
     * Паттерн Одиночка
     *
     * Назначение: Гарантирует, что у класса есть только один экземпляр, и
     * предоставляет к нему глобальную точку доступа.
     */
    public function __invoke(Request $request)
    {
        $this->clientCode();
    }

    /**
     * Клиентский код.
     */
    private function clientCode()
    {
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();

        if ($s1 === $s2) {
            echo 'Singleton works, both variables contain the same instance.';
        } else {
            echo 'Singleton failed, variables contain different instances.';
        }
    }
}
