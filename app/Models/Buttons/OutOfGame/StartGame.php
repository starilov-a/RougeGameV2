<?php


namespace App\Models\Buttons\OutOfGame;


use App\Models\Buttons\Behaviors\Action\CreateNewGame;
use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;

class StartGame extends \App\Models\Buttons\Button
{

    const TEXT_BUTTON = 'Начать игру';

    public function __construct()
    {
        $this->setActionBehavior(new CreateNewGame());
        $this->setNextButtonsBehavior(new MainGameMenu());
    }

}
