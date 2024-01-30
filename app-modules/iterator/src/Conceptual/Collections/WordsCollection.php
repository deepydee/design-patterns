<?php

declare(strict_types=1);

namespace Modules\Iterator\Conceptual\Collections;

use Modules\Iterator\Conceptual\Iterators\AlphabeticalOrderIterator;

/**
 * Конкретные Коллекции предоставляют один или несколько методов для получения
 * новых экземпляров итератора, совместимых с классом коллекции.
 */
class WordsCollection implements \IteratorAggregate
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(mixed $item): void
    {
        $this->items[] = $item;
    }

    public function getIterator(): \Iterator
    {
        return new AlphabeticalOrderIterator(collection: $this);
    }

    public function getReverseIterator(): \Iterator
    {
        return new AlphabeticalOrderIterator(collection: $this, reverse: true);
    }
}
