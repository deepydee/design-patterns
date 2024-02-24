<?php

namespace Modules\ZandstraPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\ZandstraPatterns\Strategy\Marker\MatchMarker;
use Modules\ZandstraPatterns\Strategy\Marker\RegexpMarker;
use Modules\ZandstraPatterns\Strategy\Question\TextQuestion;

class StrategyController extends Controller
{
    public function index(): void
    {
        $markers = [
            new RegexpMarker('/f.+ive/s'),
            new MatchMarker('five'),
        ];

        foreach ($markers as $marker) {
            echo get_class($marker).'<br>';

            $q = new TextQuestion('How many rays does a five-pointed star have?', $marker);

            foreach (['five', 'four'] as $res) {
                echo 'Answer: ' . $res . '<br>';

                if ($q->mark($res)) {
                    echo 'Correct<br>';
                } else {
                    echo 'Incorrect<br>';
                }
            }
        }
    }
}
