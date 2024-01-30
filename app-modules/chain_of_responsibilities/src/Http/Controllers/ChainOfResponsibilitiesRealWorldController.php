<?php

declare(strict_types=1);

namespace Modules\ChainOfResponsibilities\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\ChainOfResponsibilities\RealWorld\RoleCheckMiddleware;
use Modules\ChainOfResponsibilities\RealWorld\Server;
use Modules\ChainOfResponsibilities\RealWorld\ThrottlingMiddleware;
use Modules\ChainOfResponsibilities\RealWorld\UserExistsMiddleware;

/**
 * Клиентский код.
 */
class ChainOfResponsibilitiesRealWorldController extends Controller
{
    public function __invoke(Server $server)
    {
        $server->register('admin@example.com', 'admin_pass');
        $server->register('user@example.com', 'user_pass');

        // Все middleware соединены в цепочки. Клиент может построить различные
        // конфигурации цепочек в зависимости от своих потребностей.
        $middleware = new ThrottlingMiddleware(2);
        $middleware
            ->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware());

        // Сервер получает цепочку из клиентского кода.
        $server->setMiddleware($middleware);

        // ...

        do {
            echo '<br>Enter your email:<br>';
            $email = 'user@example.com';

            echo 'Enter your password:<br>';
            $password = 'user_pass';

            $success = $server->logIn($email, $password);
        } while (! $success);
    }
}
