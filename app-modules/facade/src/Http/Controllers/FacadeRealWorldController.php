<?php

namespace Modules\Facade\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Facade\ReallWorld\YouTubeDownloader;

/**
 * Паттерн Фасад
 *
 * Назначение: Предоставляет единый интерфейс к ряду интерфейсов в подсистеме.
 * Фасад определяет интерфейс более высокого уровня, который упрощает
 * использование подсистемы.
 *
 * Пример: Думайте о Фасаде как о «адаптере-упрощателе» для некой сложной
 * подсистемы. Фасад изолирует сложность в рамках одного класса и позволяет
 * остальному коду приложения использовать простой интерфейс.
 *
 * В этом примере Фасад скрывает сложность API YouTube и библиотеки FFmpeg от
 * клиентского кода. Вместо того, чтобы работать с десятками классов, клиент
 * использует простой метод Фасада.
 */
class FacadeRealWorldController extends Controller
{
    public function __invoke()
    {
        $facade = new YouTubeDownloader('APIKEY-XXXXXXXXX');
        $this->clientCode($facade);
    }

    /**
     * Клиентский код не зависит от классов подсистем. Любые изменения внутри кода
     * подсистем не будут влиять на клиентский код. Вам нужно будет всего лишь
     * обновить Фасад.
     */
    private function clientCode(YouTubeDownloader $facade)
    {
        // ...

        $facade->downloadVideo('https://www.youtube.com/watch?v=QH2-TGUlwu4');

        // ...
    }
}
