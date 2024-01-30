<?php

namespace Modules\Iterator\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Iterator\RealWorld\CSVIterator;

class IteratorRealWorldController extends Controller
{
    public function __invoke()
    {
        $csv = new CSVIterator(storage_path('app').'/cats.csv');

        // echo '<pre>';
        // foreach ($csv as $key => $row) {
        //     print_r($row);
        // }
        // echo '</pre>';

        echo '<pre>';
        for ($csv->rewind(); $csv->valid(); $csv->next()) {
            print_r($csv->key());
            print_r($csv->current());
        }
        echo '</pre>';
    }
}
