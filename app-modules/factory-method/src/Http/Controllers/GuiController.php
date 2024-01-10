<?php

namespace Modules\FactoryMethod\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\FactoryMethod\Gui\Forms\BootstrapDialogForm;
use Modules\FactoryMethod\Gui\Forms\SemanticUIDialogForm;

class GuiController extends Controller
{
    public function __invoke()
    {
        // $dialogForm = new BootstrapDialogForm();
        $dialogForm = new SemanticUIDialogForm();
        $dialogForm->render();
    }
}
