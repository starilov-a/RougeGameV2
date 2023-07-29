<?php


namespace App\Models\Game\Entitys\Interfaces;


use App\Models\Game\World\Rooms\RoomInterface;

interface EntityInterface
{

	public function changeRoom(RoomInterface $room);
	public function getEntityName();
    public function getEntityId();
	public function getCurrentRoom();

}
