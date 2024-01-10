<?php

namespace Modules\Proxy\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Proxy\Conceptual\Contracts\Subject;
use Modules\Proxy\Conceptual\Proxy;
use Modules\Proxy\Conceptual\RealSubject;

/**
 * Паттерн Заместитель
 *
 * Назначение: Позволяет подставлять вместо реальных объектов специальные
 * объекты-заменители. Эти объекты перехватывают вызовы к оригинальному объекту,
 * позволяя сделать что-то до или после передачи вызова оригиналу.
 */
class ProxyConceptualController extends Controller
{
    public function __invoke()
    {
        echo "Client: Executing the client code with a real subject:<br>";
        $realSubject = new RealSubject();
        $this->clientCode($realSubject);

        echo "<br>";

        echo "Client: Executing the same client code with a proxy:<br>";
        $proxy = new Proxy($realSubject);
        $this->clientCode($proxy);
    }

    /**
     * Клиентский код должен работать со всеми объектами (как с реальными, так и
     * заместителями) через интерфейс Субъекта, чтобы поддерживать как реальные
     * субъекты, так и заместителей. В реальной жизни, однако, клиенты в основном
     * работают с реальными субъектами напрямую. В этом случае, для более простой
     * реализации паттерна, можно расширить заместителя из класса реального
     * субъекта.
     */
    private function clientCode(Subject $subject)
    {
        // ...

        $subject->request();

        // ...
    }
}
