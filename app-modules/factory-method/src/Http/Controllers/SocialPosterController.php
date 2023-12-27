<?php

namespace Modules\FactoryMethod\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\FactoryMethod\RealWorld\Posters\FacebookPoster;
use Modules\FactoryMethod\RealWorld\Posters\LinkedInPoster;
use Modules\FactoryMethod\RealWorld\SocialNetworkPoster;

class SocialPosterController extends Controller
{
    /**
     * На этапе инициализации приложение может выбрать, с какой социальной сетью оно
     * хочет работать, создать объект соответствующего подкласса и передать его
     * клиентскому коду.
     */
    public function index(): void
    {
        echo "Testing ConcreteCreator1:\n";
        $this->clientCode(new FacebookPoster("john_smith", "******"));
        echo "\n\n";

        echo "Testing ConcreteCreator2:\n";
        $this->clientCode(new LinkedInPoster("john_smith@example.com", "******"));
    }

    /**
     * Клиентский код может работать с любым подклассом SocialNetworkPoster, так как
     * он не зависит от конкретных классов.
     */
    private function clientCode(SocialNetworkPoster $creator)
    {
        // ...
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
        // ...
    }
}
