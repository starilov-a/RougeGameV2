<?php


namespace App\Models\Game;


use App\Models\Game\Entitys\Player;
use App\Models\Game\Generators\Floor\FloorBuilders\Floor1Builder;
use App\Models\Game\Generators\Floor\FloorDirector;
use App\Models\Game\Generators\Game\GameBuilder;

class Game
{

    public $player;
    public $world;

    public function __construct()
    {
        $gameCreator = new GameBuilder();

        //генерация карты
        $this->world = $gameCreator->createFloor();

        //генерация player
        $this->player = $gameCreator->createPlayer();
    }

    public function update()
    {
        //обновление карты
        //обновление позиции нпс
        //отработка событий
    }

}
