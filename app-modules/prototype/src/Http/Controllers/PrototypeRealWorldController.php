<?php

namespace Modules\Prototype\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Prototype\RealWorld\Author;
use Modules\Prototype\RealWorld\Page;

class PrototypeRealWorldController extends Controller
{
    /**
     * Паттерн Прототип
     *
     * Назначение: Позволяет копировать объекты, не вдаваясь в подробности их
     * реализации.
     *
     * Пример: Паттерн Прототип предоставляет удобный способ репликации существующих
     * объектов вместо их восстановления и копирования всех полей напрямую. Прямое
     * копирование не только связывает вас с классами клонируемых объектов, но и не
     * позволяет копировать содержимое приватных полей. Паттерн Прототип позволяет
     * выполнять клонирование в контексте клонированного класса, где доступ к
     * приватным полям класса не ограничен.
     *
     * В этом примере показано, как клонировать сложный объект Страницы, используя
     * паттерн Прототип. Класс Страница имеет множество приватных полей, которые
     * будут перенесены в клонированный объект благодаря паттерну Прототип.
     */
    public function __invoke()
    {
        $this->clientCode();
    }

    private function clientCode(): void
    {
        $author = new Author('John Smith');
        $page = new Page('Tip of the day', 'Keep calm and carry on.', $author);

        // ...

        $page->addComment('Nice tip, thanks!');

        // ...

        $draft = clone $page;
        echo "Dump of the clone. Note that the author is now referencing two objects.<br>";

        echo '<pre>';
        print_r($draft);
        echo '</pre>';
    }
}
