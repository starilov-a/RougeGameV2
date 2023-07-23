<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\EmptyAction;
use App\Models\Buttons\Behaviors\NextButtons\MoveMenu;

class Movement extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Движение';

    public function __construct()
    {
        $this->setActionBehavior(new EmptyAction());
        $this->setNextButtonsBehavior(new MoveMenu());
    }
}
