<?php

declare(strict_types=1);

namespace Modules\Builder\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Builder\BlogPost\BlogPostBuilder;
use Modules\Builder\BlogPost\BlogPostManager;
use Modules\Builder\RealWorld\Builders\MySQL\MysqlQueryBuilder;
use Modules\Builder\RealWorld\Builders\PostgreSQL\PostgresQueryBuilder;
use Modules\Builder\RealWorld\Contracts\SQLQueryBuilder;


class BuilderBlogPostController extends Controller
{
    public function __invoke()
    {
        $builder = new BlogPostBuilder();

        $posts[] = $builder->setTitle('My First Post')
            ->get();

        $manager = new BlogPostManager();
        $manager->setBuilder($builder);

        $posts[] = $manager->createCleanPost();
        $posts[] = $manager->createNewItPost();
        $posts[] = $manager->createNewCatsPost();

        echo '<pre>';
        print_r($posts);
        echo '</pre>';
    }
}
