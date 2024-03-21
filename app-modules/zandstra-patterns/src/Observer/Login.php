<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Observer;

use Modules\ZandstraPatterns\Observer\Contracts\Observable;
use Modules\ZandstraPatterns\Observer\Contracts\Observer;
use Modules\ZandstraPatterns\Observer\Enums\LoginStatus;

class Login implements Observable
{
    private array $status = [];

    private array $observers = [];

    public function handleLogin(string $user, string $pass, string $ip): bool
    {
        $isvalid = false;

        switch (LoginStatus::cases()[rand(0, 2)]) {
            case LoginStatus::LOGIN_USER_UNKNOWN:
                $isvalid = false;
                $this->setStatus(LoginStatus::LOGIN_USER_UNKNOWN, $user, $ip);
                break;
            case LoginStatus::LOGIN_WRONG_PASS:
                $isvalid = false;
                $this->setStatus(LoginStatus::LOGIN_WRONG_PASS, $user, $ip);
                break;
            case LoginStatus::LOGIN_ACCESS:
                $isvalid = true;
                $this->setStatus(LoginStatus::LOGIN_ACCESS, $user, $ip);
                break;
        }

        $this->notify();

        return $isvalid;
    }

    public function getStatus(): array
    {
        return $this->status;
    }

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, fn (Observer $s): bool => $s !== $observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    private function setStatus(LoginStatus $status, string $user, string $ip): void
    {
        $this->status[] = [$status, $user, $ip];
    }
}
