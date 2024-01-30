<?php

declare(strict_types=1);

namespace Modules\Flyweight\Conceptual;

/**
 * Фабрика Легковесов создает объекты-Легковесы и управляет ими. Она
 * обеспечивает правильное разделение легковесов. Когда клиент запрашивает
 * легковес, фабрика либо возвращает существующий экземпляр, либо создает новый,
 * если он ещё не существует.
 */
class FlyweightFactory
{
    /**
     * @var Flyweight[]
     */
    private array $flyweights = [];

    public function __construct(array $initialFlyweights)
    {
        foreach ($initialFlyweights as $state) {
            $this->flyweights[$this->getKey($state)] = new Flyweight($state);
        }
    }

    /**
     * Возвращает существующий Легковес с заданным состоянием или создает новый.
     */
    public function getFlyweight(array $sharedState): Flyweight
    {
        $key = $this->getKey($sharedState);

        if (! isset($this->flyweights[$key])) {
            echo "FlyweightFactory: Can't find a flyweight, creating new one.<br>";
            $this->flyweights[$key] = new Flyweight($sharedState);
        } else {
            echo 'FlyweightFactory: Reusing existing flyweight.<br>';
        }

        return $this->flyweights[$key];
    }

    public function listFlyweights(): void
    {
        $count = count($this->flyweights);

        echo "<br>FlyweightFactory: I have $count flyweights:<br>";

        foreach ($this->flyweights as $key => $flyweight) {
            echo $key.'<br>';
        }
    }

    /**
     * Возвращает хеш строки Легковеса для данного состояния.
     */
    private function getKey(array $state): string
    {
        ksort($state);

        return implode('_', $state);
    }
}
