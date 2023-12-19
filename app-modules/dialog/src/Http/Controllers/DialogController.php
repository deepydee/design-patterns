<?php

namespace Modules\Dialog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Modules\Dialog\Factories\DialogFactory;

class DialogController extends Controller
{
    public function index(): View
    {
        $os = config('dialog.os');
        $dialog = DialogFactory::instance($os);

        $button = $dialog->createButton();

        return view('dialog::index', ['button' => $button]);
    }
}
