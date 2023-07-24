<?php


namespace App\Models\Game\Entitys;


use App\Models\Game\World\Rooms\Room;

abstract class Entity implements EntityInterface
{

    protected $id;
    protected $currentRoom;

    public function enterRoom(Room $room)
    {
        $this->currentRoom->exitRoom($this);
        $this->currentRoom = $room;
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

    public function get()
    {
        return $this->currentRoom;
    }

}
