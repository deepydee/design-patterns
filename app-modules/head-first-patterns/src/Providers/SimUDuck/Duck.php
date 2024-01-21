<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Providers\SimUDuck;

use Modules\HeadFirstPatterns\Providers\SimUDuck\Contracts\FlyBehavior;
use Modules\HeadFirstPatterns\Providers\SimUDuck\Contracts\QuackBehavior;

abstract class Duck
{
    protected FlyBehavior $flyBehavior;

    protected QuackBehavior $quackBehavior;

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function swim(): void
    {
        echo 'All ducks float, even decoys!<br>';
    }

    abstract public function display(): void;

    public function getFlyBehavior(): FlyBehavior
    {
        return $this->flyBehavior;
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): self
    {
        $this->flyBehavior = $flyBehavior;

        return $this;
    }

    public function getQuackBehavior(): QuackBehavior
    {
        return $this->quackBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): self
    {
        $this->quackBehavior = $quackBehavior;

        return $this;
    }
}
