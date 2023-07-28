<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\EmptyAction;
use App\Models\Buttons\Behaviors\Action\PauseGame;

class ExitToMainMenu extends \App\Models\Buttons\Button
{
    const TEXT_BUTTON = 'Выйти в главное меню';

    public function __construct()
    {
        $this->setActionBehavior(new PauseGame());
        $this->setNextButtonsBehavior(new \App\Models\Buttons\Behaviors\NextButtons\MainMenu());
    }
}
