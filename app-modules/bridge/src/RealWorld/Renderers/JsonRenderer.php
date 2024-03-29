<?php

declare(strict_types=1);

namespace Modules\Bridge\RealWorld\Renderers;

use Modules\Bridge\RealWorld\Contracts\Renderer;

/**
 * Эта Конкретная Реализация отображает веб-страницу в виде строк JSON.
 */
final class JsonRenderer implements Renderer
{
    public function renderTitle(string $title): string
    {
        return '"title": "'.$title.'"';
    }

    public function renderTextBlock(string $text): string
    {
        return '"text": "'.$text.'"';
    }

    public function renderImage(string $url): string
    {
        return '"img": "'.$url.'"';
    }

    public function renderLink(string $url, string $title): string
    {
        return '"link": {"href": "'.$url.'", "title": "'.$title.'"}';
    }

    public function renderHeader(): string
    {
        return '';
    }

    public function renderFooter(): string
    {
        return '';
    }

    public function renderParts(array $parts): string
    {
        return "{\n".implode(",\n", array_filter($parts))."\n}";
    }
}
