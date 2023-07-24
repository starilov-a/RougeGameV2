<?php


namespace App\Models\Game\Generators\Player\PlayerBuilders;


use App\Models\Game\Entitys\Player;

class PlayerClassicBuilder extends PlayerBuilder
{

    public function reset()
    {
        $this->player = new Player();
    }


    public function setInRoom()
    {
        $currentRoom = $this->floor->randomEmptyRoom();
        $this->player->setCurrentRoom($currentRoom);
        $currentRoom->enter($this->player);

        $roomsNear = $this->floor->getRoomsNearEntity($this->player);
        foreach ($roomsNear as $room)
            $room->setFogStatus(1);
    }

    public function giveItems()
    {
        return false;
    }
}
