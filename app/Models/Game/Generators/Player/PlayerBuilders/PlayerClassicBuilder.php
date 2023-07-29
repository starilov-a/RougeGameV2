<?php


namespace App\Models\Game\Generators\Player\PlayerBuilders;


use App\Models\Game\Entitys\Player;
use App\Models\Game\Items\Flashlight;

class PlayerClassicBuilder extends PlayerBuilder
{

    public function reset()
    {
        $this->player = new Player();
    }

    public function setInRoom()
    {
        $currentRoom = $this->floor->randomEmptyRoom();
        $currentRoom->enterRoom($this->player, $currentRoom);

        $roomsNear = $this->floor->getRoomsNearEntity($this->player);
        foreach ($roomsNear as $room){
            $room->setFogStatus(1);
        }
    }

    public function giveItems()
    {
        $this->player->setItem(new Flashlight());
    }
}
