<?php


namespace App\Models\Buttons\Behaviors\Action;


use App\Models\Game\Game;

class CreateNewGame extends Action
{

    const MESSAGE = 'Игра содзана';

    public function action()
    {
        $this->game->create();
        return self::MESSAGE;
    }
}
