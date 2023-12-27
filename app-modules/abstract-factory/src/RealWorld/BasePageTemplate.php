<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\RealWorld;

use Modules\AbstractFactory\RealWorld\Contracts\PageTemplate;
use Modules\AbstractFactory\RealWorld\Contracts\TitleTemplate;

/**
 * Шаблон страниц использует под-шаблон заголовков, поэтому мы должны
 * предоставить способ установить объект для этого под-шаблона. Абстрактная
 * фабрика позаботится о том, чтобы подать сюда под-шаблон подходящего типа.
 */
abstract class BasePageTemplate implements PageTemplate
{
    public function __construct(protected TitleTemplate $titleTemplate)
    {
    }
}
