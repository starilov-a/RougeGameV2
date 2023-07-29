<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


use App\Models\Buttons\Meta\Back;
use App\Models\Buttons\Meta\NextPage;
use App\Models\Buttons\Meta\PreviousPage;
use App\Models\Session;

class PlayerInventoryMenu extends GeneratedMenu
{

    protected function itemsForGenerate()
    {
        return $this->game->player->getItmes();
    }

}
