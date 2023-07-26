<?php


namespace App\Models\Game\Entitys;


use App\Models\Game\World\Rooms\Room;
use App\Models\Game\World\Rooms\RoomInterface;

abstract class Entity implements EntityInterface
{

    protected $id;
    protected $currentRoom;

    public function setCurrentRoom($currentRoom)
    {
        $this->currentRoom = $currentRoom;
    }

    public function changeRoom(RoomInterface $room)
    {
        return $room->enterRoom($this, $room);
    }

    public function getEntityName()
    {
        $reflect = new \ReflectionClass($this);
        return $reflect->getShortName();
    }

    public function getEntityId()
    {
        return $this->id;
    }

    public function getCurrentRoom()
    {
        return $this->currentRoom;
    }

}
