<?php


namespace App\Models\Buttons\Behaviors\Action;


use App\Models\Game\Game;

class LoadGame extends Action
{

    const MESSAGE = 'Игра Загружена';

    public function action()
    {
        $this->game->startStatus();
        return self::MESSAGE;
    }
}
