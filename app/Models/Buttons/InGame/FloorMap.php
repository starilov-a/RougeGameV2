<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\ViewMap;
use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;

class FloorMap extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Карта';

    public function __construct()
    {
        $this->setActionBehavior(new ViewMap());
        $this->setNextButtonsBehavior(new MainGameMenu());
    }
}
