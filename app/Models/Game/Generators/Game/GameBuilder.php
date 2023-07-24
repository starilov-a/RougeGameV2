<?php


namespace App\Models\Game\Generators\Game;


use App\Models\Game\Entitys\Player;
use App\Models\Game\Generators\Floor\FloorBuilders\Floor1Builder;
use App\Models\Game\Generators\Floor\FloorDirector;
use App\Models\Game\Generators\Player\PlayerBuilders\PlayerClassicBuilder;
use App\Models\Game\Generators\Player\PlayerDirector;

class GameBuilder
{

    protected $floor;
    protected $player;

    public function createFloor()
    {
        $creator = new FloorDirector();
        $builder = new Floor1Builder();
        $creator->createFloor($builder);
        $this->floor = $builder->getResult();

        return $this->floor;
    }

    public function createPlayer()
    {
        $creator = new PlayerDirector();
        $builder = new PlayerClassicBuilder($this->floor);
        $creator->createPlayer($builder);
        $this->player = $builder->getResult();

        return $this->player;
    }
}
