<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Observer\Observers;

use Modules\ZandstraPatterns\Observer\Contracts\Observable;
use Modules\ZandstraPatterns\Observer\Contracts\Observer;
use Modules\ZandstraPatterns\Observer\Login;

abstract class LoginObserver implements Observer
{
    public function __construct(private Login $login)
    {
        $login->attach($this);
    }

    public function update(Observable $observable): void
    {
        if ($observable === $this->login) {
            $this->doUpdate($observable);
        }
    }

    abstract public function doUpdate(Login $login): void;
}
