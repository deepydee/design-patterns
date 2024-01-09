<?php

namespace Modules\AbstractFactory\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\AbstractFactory\Gui\Contracts\GuiFactory;
use Modules\AbstractFactory\Gui\Enums\KitType;
use Modules\AbstractFactory\Gui\GuiKitFactory;

class GuiFactoryController extends Controller
{
    private GuiFactory $guiKit;

    public function __invoke(GuiKitFactory $guiKitFactory)
    {
        $this->guiKit = $guiKitFactory->getFactory(KitType::Semanticui);
        $this->guiKit->buildButton()->draw();
        $this->guiKit->buildCheckBox()->draw();
    }
}
