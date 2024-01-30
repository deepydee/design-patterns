<?php

declare(strict_types=1);

namespace Modules\Builder\BlogPost;

use Modules\Builder\BlogPost\Contracts\BlogPostBuilder;

class BlogPostManager
{
    private BlogPostBuilder $builder;

    public function setBuilder(BlogPostBuilder $builder): self
    {
        $this->builder = $builder;

        return $this;
    }

    public function createCleanPost(): BlogPost
    {
        return $this->builder->get();
    }

    public function createNewItPost(): BlogPost
    {
        return $this->builder->setTitle('New Post About IT')
            ->setBody('...')
            ->setCategories(['IT'])
            ->setTags(['new', 'post'])
            ->get();
    }

    public function createNewCatsPost(): BlogPost
    {
        return $this->builder->setTitle('New Post About Cats')
            ->setCategories(['Animals'])
            ->setTags(['cats', 'animals'])
            ->get();
    }
}
