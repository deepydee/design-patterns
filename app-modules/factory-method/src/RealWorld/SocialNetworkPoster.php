<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\RealWorld;

use Modules\FactoryMethod\RealWorld\Contracts\SocialNetworkConnector;

/**
 * Создатель объявляет фабричный метод, который может быть использован вместо
 * прямых вызовов конструктора продуктов, например:
 *
 * - До: $p = new FacebookConnector();
 * - После: $p = $this->getSocialNetwork;
 *
 * Это позволяет подклассам SocialNetworkPoster изменять тип создаваемого
 * продукта.
 */
abstract class SocialNetworkPoster
{
    /**
     * Фактический фабричный метод. Обратите внимание, что он возвращает
     * абстрактный коннектор. Это позволяет подклассам возвращать любые
     * конкретные коннекторы без нарушения контракта суперкласса.
     */
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    /**
     * Когда фабричный метод используется внутри бизнес-логики Создателя,
     * подклассы могут изменять логику косвенно, возвращая из фабричного метода
     * различные типы коннекторов.
     */
    public function post($content): void
    {
        // Вызываем фабричный метод для создания объекта Продукта...
        $network = $this->getSocialNetwork();
        // ...а затем используем его по своему усмотрению.
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}
