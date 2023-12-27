<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\RealWorld\Posters;

use Modules\FactoryMethod\RealWorld\Connectors\FacebookConnector;
use Modules\FactoryMethod\RealWorld\Contracts\SocialNetworkConnector;
use Modules\FactoryMethod\RealWorld\SocialNetworkPoster;

/**
 * Этот Конкретный Создатель поддерживает Facebook. Помните, что этот класс
 * также наследует метод post от родительского класса. Конкретные Создатели —
 * это классы, которые фактически использует Клиент.
 */
final class FacebookPoster extends SocialNetworkPoster
{
    public function __construct(private string $email, private string $password)
    {
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector(
            email: $this->email,
            password: $this->password,
        );
    }
}
