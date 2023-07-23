<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\EmptyAction;
use App\Models\Buttons\Behaviors\NextButtons\Decorators\RowsGenerator;
use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;

class Flashlight extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Фонарик';

    public function __construct()
    {
        $this->setActionBehavior(new FlashlightAction());
        $this->setNextButtonsBehavior(new MainGameMenu());
    }
}
