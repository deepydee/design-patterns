<?php

declare(strict_types=1);

namespace Modules\Prototype\RealWorld;

class Author
{
    /**
     * @var Page[]
     */
    private array $pages = [];

    public function __construct(private string $name)
    {
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}
