<?php

declare(strict_types=1);

namespace Modules\Observer\Conceptual\Observers;

/**
 * Конкретные Наблюдатели реагируют на обновления, выпущенные Издателем, к
 * которому они прикреплены.
 */
class ConcreteObserverB implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state == 0 || $subject->state >= 2) {
            echo 'ConcreteObserverB: Reacted to the event.<br>';
        }
    }
}
