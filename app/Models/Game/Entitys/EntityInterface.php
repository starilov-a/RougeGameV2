<?php


namespace App\Models\Game\Entitys;


use App\Models\Game\World\Rooms\Room;

interface EntityInterface
{

	public function enterRoom(Room $room);
	public function getEntityName();
    public function getEntityId();
	public function getCurrentRoom();

}
