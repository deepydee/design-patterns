<?php

declare(strict_types=1);

namespace Modules\Builder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Builder\RealWorld\Builders\MySQL\MysqlQueryBuilder;
use Modules\Builder\RealWorld\Builders\PostgreSQL\PostgresQueryBuilder;
use Modules\Builder\RealWorld\Contracts\SQLQueryBuilder;

/**
 * Паттерн Строитель
 *
 * Назначение: Позволяет создавать сложные объекты пошагово. Строитель даёт
 * возможность использовать один и тот же код строительства для получения разных
 * представлений объектов.
 *
 * Пример: Одним из лучших применений паттерна Строитель является конструктор
 * запросов SQL. Интерфейс Строителя определяет общие шаги, необходимые для
 * построения основного SQL-запроса. В тоже время Конкретные Строители,
 * соответствующие различным диалектам SQL, реализуют эти шаги, возвращая части
 * SQL-запросов, которые могут быть выполнены в данном движке базы данных.
 */
class BuilderRealWorldController extends Controller
{
    /**
     * Приложение выбирает подходящий тип строителя запроса в зависимости от текущей
     * конфигурации или настроек среды.
     */
    public function __invoke()
    {
        // if ($_ENV['database_type'] == 'postgres') {
        //     $builder = new PostgresQueryBuilder(); } else {
        //     $builder = new MysqlQueryBuilder(); }
        //
        // clientCode($builder);

        echo "Testing MySQL query builder:<br>";
        $this->clientCode(new MysqlQueryBuilder());

        echo "<br>";

        echo "Testing PostgresSQL query builder:<br>";
        $this->clientCode(new PostgresQueryBuilder());
    }

    private function clientCode(SQLQueryBuilder $queryBuilder): void
    {
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20)
            ->getSQL();

        echo $query;
    }
}
