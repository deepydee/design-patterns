<?php

declare(strict_types=1);

use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorLogger;
use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorNotifierManagers;
use Modules\Decorator\Orders\Decorators\OrderUpdateDecoratorNotifierUsers;

return [
    'fromWeb' => [
        [
            'name' => 'log',
            'enebled' => 1,
            'decorator_class' => OrderUpdateDecoratorLogger::class,
        ],
        [
            'name' => 'notifyUser',
            'enebled' => 0,
            'decorator_class' => OrderUpdateDecoratorNotifierUsers::class,
        ],
        [
            'name' => 'notifyManager',
            'enebled' => 1,
            'decorator_class' => OrderUpdateDecoratorNotifierManagers::class,
        ],
    ],
    'fromAdmin' => [
        [
            'name' => 'log',
            'enebled' => 1,
            'decorator_class' => OrderUpdateDecoratorLogger::class,
        ],
        [
            'name' => 'notifyManager',
            'enebled' => 1,
            'decorator_class' => OrderUpdateDecoratorNotifierManagers::class,
        ],
    ],
];
