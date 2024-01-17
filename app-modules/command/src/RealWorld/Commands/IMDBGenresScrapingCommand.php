<?php

declare(strict_types=1);

namespace Modules\Command\RealWorld\Commands;

use Modules\Command\RealWorld\Contracts\Command;
use Modules\Command\RealWorld\Queue;

/**
 * Конкретная Команда для извлечения списка жанров фильма.
 */
class IMDBGenresScrapingCommand extends WebScrapingCommand
{
    public function __construct()
    {
        $this->url = "https://www.imdb.com/feature/genre/";
    }

    /**
     * Извлечение всех жанров и их поисковых URL со страницы:
     * https://www.imdb.com/feature/genre/
     */
    public function parse($html): void
    {
        preg_match_all("|href=\"(https://www.imdb.com/search/title\?genres=.*?)\"|", $html, $matches);
        echo "IMDBGenresScrapingCommand: Discovered " . count($matches[1]) . " genres.<br>";

        foreach ($matches[1] as $genre) {
            Queue::get()->add(new IMDBGenrePageScrapingCommand($genre));
        }
    }
}
