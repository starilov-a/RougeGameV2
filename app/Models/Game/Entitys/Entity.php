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
        $currentRoom->enter($this);
    }

    public function enterRoom(RoomInterface $room)
    {
        return $room->enter($this);
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
