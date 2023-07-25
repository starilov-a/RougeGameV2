<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\MoveAction;
use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;
use App\Models\Buttons\Behaviors\NextButtons\MoveMenu;

class MoveLeft extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Влево';

    public function __construct()
    {
        $this->setActionBehavior(new MoveAction('left'));
        $this->setNextButtonsBehavior(new MainGameMenu());
    }
}
