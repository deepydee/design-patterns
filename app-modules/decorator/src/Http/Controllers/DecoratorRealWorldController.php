<?php

namespace Modules\Decorator\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Decorator\RealWorld\Contracts\InputFormat;
use Modules\Decorator\RealWorld\DangerousHTMLTagsFilter;
use Modules\Decorator\RealWorld\MarkdownFormat;
use Modules\Decorator\RealWorld\PlainTextFilter;
use Modules\Decorator\RealWorld\TextInput;

/**
 * Паттерн Декоратор
 *
 * Назначение: Позволяет динамически добавлять объектам новую функциональность,
 * оборачивая их в полезные «обёртки».
 *
 * Пример: В этом примере паттерн Декоратора помогает создать сложные правила
 * фильтрации текста для приведения информации в порядок перед её отображением
 * на веб-странице. Разные типы информации, такие как комментарии, сообщения на
 * форуме или личные сообщения, требуют разных наборов фильтров.
 *
 * Например, вы хотели бы удалить весь HTML из комментариев и в тоже время
 * сохранить некоторые основные теги HTML в сообщениях на форуме. Кроме того, вы
 * можете пожелать разрешить публикацию в формате Markdown, который должен быть
 * обработан перед какой-либо фильтрацией HTML. Все эти правила фильтрации могут
 * быть представлены в виде отдельных классов декораторов, которые могут быть
 * сложены в стек по-разному, в зависимости от характера содержимого.
 */
class DecoratorRealWorldController extends Controller
{
    public function __invoke()
    {
        /**
         * Модули форматирования пользовательского ввода очень удобны при работе с
         * контентом, создаваемым пользователями. Отображение такого контента «как есть»
         * может быть очень опасным, особенно когда его могут создавать анонимные
         * пользователи (например, комментарии). Ваш сайт не только рискует получить
         * массу спам-ссылок, но также может быть подвергнут XSS-атакам.
         */
        $dangerousComment = <<<'HERE'
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

        /**
         * Наивное отображение комментариев (небезопасное).
         */
        $naiveInput = new TextInput();
        echo 'Website renders comments without filtering (unsafe):<br>';
        $this->displayCommentAsAWebsite($naiveInput, $dangerousComment);
        echo '<br><br><br>';

        /**
         * Отфильтрованное отображение комментариев (безопасное).
         */
        $filteredInput = new PlainTextFilter($naiveInput);
        echo 'Website renders comments after stripping all tags (safe):<br>';
        $this->displayCommentAsAWebsite($filteredInput, $dangerousComment);
        echo '<br><br><br>';

        /**
         * Декоратор позволяет складывать несколько входных форматов для получения
         * точного контроля над отображаемым содержимым.
         */
        $dangerousForumPost = <<<'HERE'
# Welcome

This is my first post on this **gorgeous** forum.

<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

        /**
         * Наивное отображение сообщений (небезопасное, без форматирования).
         */
        $naiveInput = new TextInput();
        echo 'Website renders a forum post without filtering and formatting (unsafe, ugly):<br>';
        $this->displayCommentAsAWebsite($naiveInput, $dangerousForumPost);
        echo '<br><br><br>';

        /**
         * Форматтер Markdown + фильтрация опасных тегов (безопасно, красиво).
         */
        $text = new TextInput();
        $markdown = new MarkdownFormat($text);
        $filteredInput = new DangerousHTMLTagsFilter($markdown);
        echo 'Website renders a forum post after translating markdown markup'.
            ' and filtering some dangerous HTML tags and attributes (safe, pretty):<br>';
        $this->displayCommentAsAWebsite($filteredInput, $dangerousForumPost);
        echo '<br><br><br>';
    }

    /**
     * Клиентский код может быть частью реального веб-сайта, который отображает
     * создаваемый пользователями контент. Поскольку он работает с модулями
     * форматирования через интерфейс компонента, ему всё равно, получает ли он
     * простой объект компонента или обёрнутый.
     */
    public function displayCommentAsAWebsite(InputFormat $format, string $text)
    {
        // ..

        echo $format->formatText($text);

        // ..
    }
}
