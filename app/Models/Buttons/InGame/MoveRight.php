<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\MoveAction;
use App\Models\Buttons\Behaviors\NextButtons\MoveMenu;

class MoveRight extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Пойти вправо';

    public function __construct()
    {
        $this->setActionBehavior(new MoveAction('right'));
        $this->setNextButtonsBehavior(new MoveMenu());
    }
}
