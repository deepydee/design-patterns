<?php

namespace Modules\Bridge\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Bridge\RealWorld\Page;
use Modules\Bridge\RealWorld\Pages\ProductPage;
use Modules\Bridge\RealWorld\Pages\SimplePage;
use Modules\Bridge\RealWorld\Product;
use Modules\Bridge\RealWorld\Renderers\HTMLRenderer;
use Modules\Bridge\RealWorld\Renderers\JsonRenderer;

/**
 * Паттерн Мост
 *
 * Назначение: Разделяет один или несколько классов на две отдельные иерархии —
 * абстракцию и реализацию, позволяя изменять их независимо друг от друга.
 *
 * Пример: В этом примере иерархия Страницы выступает как Абстракция, а иерархия
 * Рендера как Реализация. Объекты класса Страница монтируют веб-страницы
 * определённого типа, используя базовые элементы, которые предоставляются
 * объектом Рендер, прикреплённым к этой странице. Обе иерархии классов
 * разделены, поэтому можно добавить новый класс Рендер без изменения классов
 * страниц и наоборот.
 */
class BridgeRealWorldController extends Controller
{
    /**
     * Клиентский код может выполняться с любой предварительно сконфигурированной
     * комбинацией Абстракция+Реализация.
     */
    public function __invoke()
    {
        $HTMLRenderer = new HTMLRenderer();
        $JSONRenderer = new JsonRenderer();

        $page = new SimplePage(renderer: $HTMLRenderer, title: 'Home', content: 'Welcome to our website!');
        echo 'HTML view of a simple content page:<br>';
        $this->clientCode($page);
        echo '<br><br>';

        /**
         * При необходимости Абстракция может заменить связанную Реализацию во время
         * выполнения.
         */
        $page->changeRenderer($JSONRenderer);
        echo 'JSON view of a simple content page, rendered with the same client code:<br>';
        $this->clientCode($page);
        echo '<br><br>';

        $product = new Product(
            id: '123',
            title: 'Star Wars, episode1',
            description: 'A long time ago in a galaxy far, far away...',
            image: '/images/star-wars.jpeg',
            price: 39.95
        );

        $page = new ProductPage($HTMLRenderer, $product);
        echo 'HTML view of a product page, same client code:<br>';
        $this->clientCode($page);
        echo '<br><br>';

        $page->changeRenderer($JSONRenderer);
        echo 'JSON view of a simple content page, with the same client code:<br>';
        $this->clientCode($page);
    }

    /**
     * Клиентский код имеет дело только с объектами Абстракции.
     */
    private function clientCode(Page $page)
    {
        // ...

        echo $page->view();

        // ...
    }
}
