<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\MoveAction;
use App\Models\Buttons\Behaviors\NextButtons\MoveMenu;

class MoveUp extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Идти вперед';

    public function __construct()
    {
        $this->setActionBehavior(new MoveAction('up'));
        $this->setNextButtonsBehavior(new MoveMenu());
    }
}
