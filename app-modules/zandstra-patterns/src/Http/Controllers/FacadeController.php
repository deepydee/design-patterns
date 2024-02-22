<?php

namespace Modules\ZandstraPatterns\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Modules\ZandstraPatterns\Facade\getIDFromLine;
use function Modules\ZandstraPatterns\Facade\getNameFromLine;
use function Modules\ZandstraPatterns\Facade\getProductFileLines;
use function Modules\ZandstraPatterns\Facade\getProductObjectFromld;

class FacadeController extends Controller
{
    public function procedural(): void
    {
        $file = storage_path('facade/products.txt');
        $lines = getProductFileLines($file);

        $objects = collect($lines)
            ->map(fn ($line) => getProductObjectFromld(getIDFromLine($line), getNameFromLine($line)))
            ->toArray();

        echo '<pre>';
        print_r($objects);
        echo '</pre>';
    }
}
