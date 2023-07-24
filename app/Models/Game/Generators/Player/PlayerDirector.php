<?php


namespace App\Models\Game\Generators\Player;


use App\Models\Game\Generators\Player\PlayerBuilders\PlayerBuilerInterface;

class PlayerDirector
{

    public function createPlayer(PlayerBuilerInterface $builder)
    {
        $builder->reset();
        $builder->setInRoom();
        $builder->giveItems();
    }

}
