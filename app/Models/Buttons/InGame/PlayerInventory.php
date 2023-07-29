<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\OpenInventory;
use App\Models\Buttons\Behaviors\NextButtons\Decorators\RowsGenerator;
use App\Models\Buttons\Behaviors\NextButtons\PlayerInventoryMenu;

class PlayerInventory extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Инвентарь';

    public function __construct()
    {
        $this->setActionBehavior(new OpenInventory());
        $this->setNextButtonsBehavior(new RowsGenerator(new PlayerInventoryMenu()));
    }

}
