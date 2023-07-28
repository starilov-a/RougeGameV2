<?php


namespace App\Models\Buttons\OutOfGame;


use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;

class LoadGame extends \App\Models\Buttons\Button
{

    const TEXT_BUTTON = 'Загрузить игру';

    public function __construct()
    {
        $this->setActionBehavior(new \App\Models\Buttons\Behaviors\Action\LoadGame());
        $this->setNextButtonsBehavior(new MainGameMenu());
    }

}
