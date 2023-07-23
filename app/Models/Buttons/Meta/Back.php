<?php


namespace App\Models\Buttons\Meta;


use App\Models\Buttons\Behaviors\Action\EmptyAction;
use App\Models\Buttons\Behaviors\NextButtons\SwitchedMenu;

class Back extends \App\Models\Buttons\Button
{

    const TEXT_BUTTON = 'Назад';

    public function __construct()
    {
        $this->setActionBehavior(new EmptyAction());
        $this->setNextButtonsBehavior(new SwitchedMenu());
    }
}
