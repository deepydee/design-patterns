<?php

declare(strict_types=1);

namespace Modules\Builder\BlogPost;

use Modules\Builder\BlogPost\Contracts\BlogPostBuilder as ContractsBlogPostBuilder;

class BlogPostBuilder implements ContractsBlogPostBuilder
{
    private BlogPost $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilder
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle(string $title): BlogPostBuilder
    {
        $this->blogPost->title = $title;

        return $this;
    }

    public function setBody(string $body): BlogPostBuilder
    {
        $this->blogPost->body = $body;

        return $this;
    }

    public function setCategories(array $categories): BlogPostBuilder
    {
        $this->blogPost->categories = $categories;

        return $this;
    }

    public function setTags(array $tags): BlogPostBuilder
    {
        $this->blogPost->tags = $tags;

        return $this;
    }

    public function get(): BlogPost
    {
        $blogPost = $this->blogPost;
        $this->create();

        return $blogPost;
    }
}
