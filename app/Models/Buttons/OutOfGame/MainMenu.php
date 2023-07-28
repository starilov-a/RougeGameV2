<?php


namespace App\Models\Buttons\OutOfGame;


use App\Models\Buttons\Behaviors\Action\EmptyAction;

class MainMenu extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Главное меню';

    public function __construct()
    {
        $this->setActionBehavior(new EmptyAction());
        $this->setNextButtonsBehavior(new \App\Models\Buttons\Behaviors\NextButtons\MainMenu());
    }
}
