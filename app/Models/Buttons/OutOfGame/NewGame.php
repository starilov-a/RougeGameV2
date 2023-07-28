<?php


namespace App\Models\Buttons\OutOfGame;


use App\Models\Buttons\Behaviors\Action\CreateNewGame;
use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;

class NewGame extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Новая игра';

    public function __construct()
    {
        $this->setActionBehavior(new CreateNewGame());
        $this->setNextButtonsBehavior(new MainGameMenu());
    }
}
