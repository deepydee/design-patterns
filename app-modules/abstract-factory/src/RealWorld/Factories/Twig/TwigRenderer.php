<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\RealWorld\Factories\Twig;

use Modules\AbstractFactory\RealWorld\Contracts\TemplateRenderer;
use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * Отрисовщик шаблонов Twig.
 */
final class TwigRenderer implements TemplateRenderer
{
    private $loader;
    private $twig;


    public function render(string $templateString, array $arguments = []): string
    {
        $this->loader = new ArrayLoader(['index.html' => $templateString]);
        $this->twig = new Environment($this->loader);

        return $this->twig->render('index.html', $arguments);
    }
}
