<?php

declare(strict_types=1);

namespace Modules\ChainOfResponsibilities\RealWorld;

/**
 * Это Конкретное Middleware проверяет, имеет ли пользователь, связанный с
 * запросом, достаточные права доступа.
 */
class RoleCheckMiddleware extends Middleware
{
    public function check(string $email, string $password): bool
    {
        if ($email === 'admin@example.com') {
            echo 'RoleCheckMiddleware: Hello, admin!<br>';

            return true;
        }
        echo 'RoleCheckMiddleware: Hello, user!<br>';

        return parent::check($email, $password);
    }
}
