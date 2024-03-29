<?php

declare(strict_types=1);

namespace Modules\Flyweight\RealWorld;

/**
 * Фабрика Легковесов хранит объекты Контекст и Легковес, эффективно скрывая
 * любое упоминание о паттерне Легковес от клиента.
 */
class CatDataBase
{
    /**
     * Список объектов-кошек (Контексты).
     */
    private array $cats = [];

    /**
     * Список вариаций кошки (Легковесы).
     */
    private array $variations = [];

    /**
     * При добавлении кошки в базу данных мы сначала ищем существующую вариацию
     * кошки.
     */
    public function addCat(
        string $name,
        string $age,
        string $owner,
        string $breed,
        string $image,
        string $color,
        string $texture,
        string $fur,
        string $size
    ) {
        $variation = $this->getVariation($breed, $image, $color, $texture, $fur, $size);

        $this->cats[] = new Cat($name, $age, $owner, $variation);

        echo "CatDataBase: Added a cat ($name, $breed).<br>";
    }

    /**
     * Возвращаем существующий вариант (Легковеса) по указанным данным или
     * создаём новый, если он ещё не существует.
     */
    public function getVariation(
        string $breed,
        string $image, $color,
        string $texture,
        string $fur,
        string $size
    ): CatVariation {
        $key = $this->getKey(get_defined_vars());

        if (! isset($this->variations[$key])) {
            $this->variations[$key] =
                new CatVariation($breed, $image, $color, $texture, $fur, $size);
        }

        return $this->variations[$key];
    }

    /**
     * Ищем кошку в базе данных, используя заданные параметры запроса.
     */
    public function findCat(array $query)
    {
        foreach ($this->cats as $cat) {
            if ($cat->matches($query)) {
                return $cat;
            }
        }
        echo 'CatDataBase: Sorry, your query does not yield any results.';
    }

    /**
     * Эта функция помогает генерировать уникальные ключи массива.
     */
    private function getKey(array $data): string
    {
        return md5(implode('_', $data));
    }
}
