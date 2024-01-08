<?php

namespace Modules\Proxy\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Proxy\RealWorld\CachingDownloader;
use Modules\Proxy\RealWorld\Contracts\Downloarer;
use Modules\Proxy\RealWorld\SimpleDownloader;

/**
 * Паттерн Заместитель
 *
 * Назначение: Позволяет подставлять вместо реальных объектов специальные
 * объекты-заменители. Эти объекты перехватывают вызовы к оригинальному объекту,
 * позволяя сделать что-то до или после передачи вызова оригиналу.
 *
 * Пример: Существует бесчисленное множество направлений, где могут быть
 * использованы заместители: кэширование, логирование, контроль доступа,
 * отложенная инициализация и т.д. В этом примере показано, как паттерн
 * Заместитель может повысить производительность объекта-загрузчика путём
 * кэширования его результатов.
 */
class ProxyRealWorldController extends Controller
{
    public function __invoke()
    {
        echo "Executing client code with real subject:<br>";
        $realSubject = new SimpleDownloader();
        $this->clientCode($realSubject);

        echo "<br>";

        echo "Executing the same client code with a proxy:<br>";
        $proxy = new CachingDownloader($realSubject);
        $this->clientCode($proxy);
    }

    /**
     * Клиентский код может выдать несколько похожих запросов на загрузку. В этом
     * случае кэширующий заместитель экономит время и трафик, подавая результаты из
     * кэша.
     *
     * Клиент не знает, что он работает с заместителем, потому что он работает с
     * загрузчиками через абстрактный интерфейс.
     */
    private function clientCode(Downloarer $subject)
    {
        // ...

        $result = $subject->download('https://www.w3schools.com/sql/func_mysql_datediff.asp');

        // Повторяющиеся запросы на загрузку могут кэшироваться для увеличения
        // скорости.

        $result = $subject->download('https://www.w3schools.com/sql/func_mysql_datediff.asp');

        // ...
    }
}
