<?php

declare(strict_types=1);

namespace Modules\Bridge\RealWorld\Renderers;

use Modules\Bridge\RealWorld\Contracts\Renderer;

/**
 * Эта Конкретная Реализация отображает веб-страницу в виде HTML.
 */
final class HTMLRenderer implements Renderer
{
    public function renderTitle(string $title): string
    {
        return "<h1>$title</h1>";
    }

    public function renderTextBlock(string $text): string
    {
        return "<div class='text'>$text</div>";
    }

    public function renderImage(string $url): string
    {
        return "<img src='$url'>";
    }

    public function renderLink(string $url, string $title): string
    {
        return "<a href='$url'>$title</a>";
    }

    public function renderHeader(): string
    {
        return '<html><body>';
    }

    public function renderFooter(): string
    {
        return '</body></html>';
    }

    public function renderParts(array $parts): string
    {
        return implode("\n", $parts);
    }
}
