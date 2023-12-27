<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\RealWorld\Posters;

use Modules\FactoryMethod\RealWorld\Connectors\LinkedInConnector;
use Modules\FactoryMethod\RealWorld\Contracts\SocialNetworkConnector;
use Modules\FactoryMethod\RealWorld\SocialNetworkPoster;

/**
 * Этот Конкретный Создатель поддерживает LinkedIn.
 */
final class LinkedInPoster extends SocialNetworkPoster
{
    public function __construct(private string $email, private string $password)
    {
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector(
            email: $this->email,
            password: $this->password,
        );
    }
}
