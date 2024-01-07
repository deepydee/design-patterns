<?php

namespace Modules\Composite\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Composite\RealWorld\Fieldset;
use Modules\Composite\RealWorld\Form;
use Modules\Composite\RealWorld\FormElement;
use Modules\Composite\RealWorld\Input;

/**
 * Паттерн Компоновщик
 *
 * Назначение: Позволяет сгруппировать объекты в древовидную структуру, а затем
 * работать с ними так, как будто это единичный объект.
 *
 * Пример: Паттерн Компоновщик может упростить работу с любыми древовидными
 * рекурсивными структурами. Примером такой структуры является DOM-дерево HTML.
 * Например, в то время как различные входные элементы могут служить листьями,
 * сложные элементы, такие как формы и наборы полей, играют роль контейнеров.
 *
 * Имея это в виду, вы можете использовать паттерн Компоновщик для применения
 * различных типов поведения ко всему дереву HTML точно так же, как и к его
 * внутренним элементам, не привязывая ваш код к конкретным классам дерева DOM.
 * Примерами такого поведения может быть рендеринг элементов DOM, их экспорт в
 * различные форматы, проверка достоверности их частей и т.д.
 *
 * С паттерном Компоновщик вам не нужно проверять, является ли тип элемента
 * простым или сложным, перед реализацией поведения. В зависимости от типа
 * элемента, оно либо сразу же выполняется, либо передаётся всем дочерним
 * элементам.
 */
class CompositeRealWorldController extends Controller
{
    public function __invoke()
    {
        $form = $this->getProductForm();
        $this->loadProductData($form);
        $this->renderProduct($form);
    }

    /**
     * Клиентский код может работать с элементами формы, используя абстрактный
     * интерфейс. Таким образом, не имеет значения, работает ли клиент с простым
     * компонентом или сложным составным деревом.
     */
    private function renderProduct(FormElement $form)
    {
        // ..

        echo $form->render();

        // ..
    }

    /**
     * Клиентский код получает удобный интерфейс для построения сложных древовидных
     * структур.
     */
    private function getProductForm(): FormElement
    {
        $form = new Form(name: 'product', title: 'Add product', url: '/product/add');
        $form->add(new Input(name: 'name', title: 'Name', type: 'text'));
        $form->add(new Input(name: 'description', title: 'Description', type: 'text'));

        $picture = new Fieldset(name: 'photo', title: 'Product photo');
        $picture->add(new Input(name: 'caption', title: 'Caption', type: 'text'));
        $picture->add(new Input('image', 'Image', 'file'));
        $form->add($picture);

        return $form;
    }

    /**
     * Структура формы может быть заполнена данными из разных источников. Клиент не
     * должен проходить через все поля формы, чтобы назначить данные различным
     * полям, так как форма сама может справиться с этим.
     */
    private function loadProductData(FormElement $form)
    {
        $data = [
            'name' => 'Apple MacBook',
            'description' => 'A decent laptop.',
            'photo' => [
                'caption' => 'Front photo.',
                'image' => 'photo1.png',
            ],
        ];

        $form->setData($data);
    }
}
