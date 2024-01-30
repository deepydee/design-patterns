<?php

declare(strict_types=1);

namespace Modules\ChainOfResponsibilities\RealWorld;

/**
 * Это Конкретное Middleware проверяет, существует ли пользователь с указанными
 * учётными данными.
 */
class UserExistsMiddleware extends Middleware
{
    public function __construct(private Server $server)
    {
    }

    public function check(string $email, string $password): bool
    {
        if (! $this->server->hasEmail($email)) {
            echo 'UserExistsMiddleware: This email is not registered!<br>';

            return false;
        }

        if (! $this->server->isValidPassword($email, $password)) {
            echo 'UserExistsMiddleware: Wrong password!<br>';

            return false;
        }

        return parent::check($email, $password);
    }
}
