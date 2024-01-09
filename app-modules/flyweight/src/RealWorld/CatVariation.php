<?php

declare(strict_types=1);

namespace Modules\Flyweight\RealWorld;

/**
 * Объекты Легковеса представляют данные, разделяемые несколькими объектами
 * Кошек. Это сочетание породы, цвета, текстуры и т.д.
 */
readonly class CatVariation
{
    /**
     * Так называемое «внутреннее» состояние.
     */
    public function __construct(
        private string $breed,
        private string $image,
        private string $color,
        private string $texture,
        private string $fur,
        private string $size
    ) {
    }

    /**
     * Этот метод отображает информацию о кошке. Метод принимает внешнее
     * состояние в качестве аргументов. Остальная часть состояния хранится
     * внутри полей Легковеса.
     *
     * Возможно, вы удивлены, почему мы поместили основную логику кошки в класс
     * РазновидностейКошек вместо того, чтобы держать её в классе Кошки. Я
     * согласен, это звучит странно.
     *
     * Имейте в виду, что в реальной жизни паттерн Легковес может быть либо
     * реализован с самого начала, либо принудительно применён к существующему
     * приложению, когда разработчики понимают, что они столкнулись с проблемой
     * ОЗУ.
     *
     * Во втором случае вы получаете такие же классы, как у нас. Мы как бы
     * «отрефакторили» идеальное приложение, где все данные изначально
     * находились внутри класса Кошки. Если бы мы реализовывали Легковес с
     * самого начала, названия наших классов могли бы быть другими и более
     * определёнными. Например, Кошка и КонтекстКошки.
     *
     * Однако действительная причина, по которой основное поведение должно
     * проживать в классе Легковеса, заключается в том, что у вас может вообще
     * не быть объявленного класса Контекста. Контекстные данные могут храниться
     * в массиве или какой-то другой, более эффективной структуре данных.
     */
    public function renderProfile(string $name, string $age, string $owner): void
    {
        echo "= $name =<br>";
        echo "Age: $age<br>";
        echo "Owner: $owner<br>";
        echo "Breed: $this->breed<br>";
        echo "Image: $this->image<br>";
        echo "Color: $this->color<br>";
        echo "Texture: $this->texture<br>";
    }
}