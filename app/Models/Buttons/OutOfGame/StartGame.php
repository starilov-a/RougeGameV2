<?php


namespace App\Models\Buttons\OutOfGame;


use App\Models\Buttons\Behaviors\Action\CreateNewGame;
use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;
use App\Models\Buttons\Button;

class StartGame extends Button
{

    public function __construct($userId)
    {
        $this->textButton = 'Начать игру';
        $this->setActionBehavior(new CreateNewGame($userId));
        $this->setNextButtonsBehavior(new MainGameMenu());
    }

}
