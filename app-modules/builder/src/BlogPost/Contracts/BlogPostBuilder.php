<?php

declare(strict_types=1);

namespace Modules\Builder\BlogPost\Contracts;

use Modules\Builder\BlogPost\BlogPost;

interface BlogPostBuilder
{
    public function create(): BlogPostBuilder;
    public function setTitle(string $title): BlogPostBuilder;
    public function setBody(string $body): BlogPostBuilder;
    public function setCategories(array $categories): BlogPostBuilder;
    public function setTags(array $tags): BlogPostBuilder;
    public function get(): BlogPost;
}
