<?php

namespace Modules\Flyweight\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Flyweight\RealWorld\CatDataBase;

/**
 * Паттерн Легковес
 *
 * Назначение: Позволяет вместить бóльшее количество объектов в отведённую
 * оперативную память. Легковес экономит память, разделяя общее состояние
 * объектов между собой, вместо хранения одинаковых данных в каждом объекте.
 *
 * Пример: Прежде чем мы начнём, обратите внимание, что реальное применение
 * паттерна Легковес на PHP встречается довольно редко. Это связано с
 * однопоточным характером PHP, где вы не должны хранить ВСЕ объекты вашего
 * приложения в памяти одновременно в одном потоке. Хотя замысел этого примера
 * только наполовину серьёзен, и вся проблема с ОЗУ может быть решена, если
 * приложение структурировать по-другому, он всё же наглядно показывает
 * концепцию паттерна, как он работает в реальном мире. Итак, я вас предупредил.
 * Теперь давайте начнём.
 *
 * В этом примере паттерн Легковес применяется для минимизации использования
 * оперативной памяти объектами в базе данных животных ветеринарной клиники
 * только для кошек. Каждую запись в базе данных представляет объект-Кот. Его
 * данные состоят из двух частей:
 *
 * 1. Уникальные (внешние) данные: имя кота, возраст и инфо о владельце.
 * 2. Общие (внутренние) данные: название породы, цвет, текстура и т.д.
 *
 * Первая часть хранится непосредственно внутри класса Кот, который играет роль
 * контекста. Вторая часть, однако, хранится отдельно и может совместно
 * использоваться разными объектами котов. Эти совместно используемые данные
 * находятся внутри класса РазновидностиКотов. Все коты, имеющие схожие
 * признаки, привязаны к одному и тому же классу РазновидностейКотов, вместо
 * того чтобы хранить повторяющиеся данные в каждом из своих объектов.
 */
class FlyweightRealWorldController extends Controller
{
    public function __invoke()
    {
        /**
         * Клиентский код.
         */
        $db = new CatDataBase();

        echo "Client: Let's see what we have in \"cats.csv\".<br>";

        // Чтобы увидеть реальный эффект паттерна, вы должны иметь большую базу данных с
        // несколькими миллионами записей. Не стесняйтесь экспериментировать с кодом,
        // чтобы увидеть реальные масштабы паттерна.
        $handle = fopen(storage_path('/app/cats.csv'), 'r');
        $row = 0;
        $columns = [];

        while (($data = fgetcsv($handle)) !== false) {
            if ($row == 0) {
                for ($c = 0; $c < count($data); $c++) {
                    $columnIndex = $c;
                    $columnKey = strtolower($data[$c]);
                    $columns[$columnKey] = $columnIndex;
                }
                $row++;
                continue;
            }

            $db->addCat(
                $data[$columns['name']],
                $data[$columns['age']],
                $data[$columns['owner']],
                $data[$columns['breed']],
                $data[$columns['image']],
                $data[$columns['color']],
                $data[$columns['texture']],
                $data[$columns['fur']],
                $data[$columns['size']],
            );
            $row++;
        }
        fclose($handle);

        // ...

        echo "<br>Client: Let's look for a cat named \"Siri\".<br>";
        $cat = $db->findCat(['name' => 'Siri']);

        if ($cat) {
            $cat->render();
        }

        echo "<br>Client: Let's look for a cat named \"Bob\".<br>";
        $cat = $db->findCat(['name' => 'Bob']);

        if ($cat) {
            $cat->render();
        }
    }
}
