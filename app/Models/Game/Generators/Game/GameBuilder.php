<?php


namespace App\Models\Game\Generators\Game;


use App\Models\Game\Entitys\Player;
use App\Models\Game\Generators\Floor\FloorBuilders\Floor1Builder;
use App\Models\Game\Generators\Floor\FloorDirector;

class GameBuilder
{

    protected $floor;
    protected $player;

    public function createFloor()
    {
        $creator = new FloorDirector();
        $builder = new Floor1Builder();
        $creator->createFloor($builder);

        return $builder->getResult();
    }

    public function createPlayer()
    {
        //началтная точка
        $room = $this->floor->randomEmptyRoom();

        return new Player($room);
    }
}
