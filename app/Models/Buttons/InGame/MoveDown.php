<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\MoveAction;
use App\Models\Buttons\Behaviors\NextButtons\MoveMenu;

class MoveDown extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Идти назад';

    public function __construct()
    {
        $this->setActionBehavior(new MoveAction('down'));
        $this->setNextButtonsBehavior(new MoveMenu());
    }
}
