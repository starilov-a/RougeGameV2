<?php


namespace App\Models\Buttons\OutOfGame;


use App\Models\Buttons\Behaviors\Action\CreateNewGame;
use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;
use App\Models\Buttons\Button;
use App\Models\User;

class IndefiedButton extends Button
{
    public function __construct($userId)
    {
        $user = User::find($userId);

        if ($user->inGame()) {

        } else {
            $this->textButton = '';
        }

        $this->textButton = 'Начать игру';
        $this->setActionBehavior(new CreateNewGame($userId));
        $this->setNextButtonsBehavior(new MainGameMenu());
    }
}
