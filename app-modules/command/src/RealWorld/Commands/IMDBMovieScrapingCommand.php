<?php

declare(strict_types=1);

namespace Modules\Command\RealWorld\Commands;

/**
 * Конкретная Команда для извлечения подробных сведений о фильме.
 */
class IMDBMovieScrapingCommand extends WebScrapingCommand
{
    /**
     * Получить информацию о фильме с подобной страницы:
     * https://www.imdb.com/title/tt4154756/
     */
    public function parse(string $html): void
    {
        $title = '';

        if (preg_match('|<h1 itemprop="name" class="">(.*?)</h1>|', $html, $matches)) {
            $title = $matches[1];
        }
        echo "IMDBMovieScrapingCommand: Parsed movie $title.<br>";
    }
}
