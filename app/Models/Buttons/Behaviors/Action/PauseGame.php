<?php


namespace App\Models\Buttons\Behaviors\Action;


use App\Models\Game\Game;

class PauseGame extends Action
{

    const MESSAGE = 'Игра на паузе';

    public function action()
    {
        $this->game->pauseStatus();
        return self::MESSAGE;
    }
}
