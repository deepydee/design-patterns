<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\RealWorld\Connectors;

use Modules\FactoryMethod\RealWorld\Contracts\SocialNetworkConnector;

/**
 * Этот Конкретный Продукт реализует API Facebook.
 */
final class FacebookConnector implements SocialNetworkConnector
{
    public function __construct(private string $email, private string $password)
    {
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with ".
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}
