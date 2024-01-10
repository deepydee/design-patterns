<?php

declare(strict_types=1);

namespace Modules\Builder\BlogPost;

class BlogPost
{
    public function __construct(
        public string $title = '',
        public string $body = '',
        public array $categories = [],
        public array $tags = [],
    ) {
    }
}
