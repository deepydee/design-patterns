<?php

namespace Modules\Iterator\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Iterator\Conceptual\Collections\WordsCollection;

class IteratorConceptualController extends Controller
{
    public function __invoke(WordsCollection $collection)
    {
        $collection->addItem('First');
        $collection->addItem('Second');
        $collection->addItem('Third');

        echo "Straight traversal:<br>";

        foreach ($collection as $item) {
            echo $item . '<br>';
        }

        echo "<br>Reverse traversal:<br>";

        foreach ($collection->getReverseIterator() as $item) {
            echo $item . '<br>';
        }
    }
}
