<?php

declare(strict_types=1);

namespace Modules\TemplateMethod\RealWorld;

use Modules\TemplateMethod\RealWorld\Traits\Utils;

/**
 * Этот Конкретный Класс реализует API Facebook (ладно, он пытается).
 */
class Facebook extends SocialNetwork
{
    use Utils;

    public function logIn(string $userName, string $password): bool
    {
        echo "<br>Checking user's credentials...<br>";
        echo 'Name: '.$this->username.'<br>';
        echo 'Password: '.str_repeat('*', strlen($this->password)).'<br>';

        $this->simulateNetworkLatency();

        echo "<br><br>Facebook: '".$this->username."' has logged in successfully.<br>";

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "Facebook: '".$this->username."' has posted '".$message."'.<br>";

        return true;
    }

    public function logOut(): void
    {
        echo "Facebook: '".$this->username."' has been logged out.<br>";
    }
}
