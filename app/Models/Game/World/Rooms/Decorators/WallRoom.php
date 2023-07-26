<?php


namespace App\Models\Game\World\Rooms\Decorators;


use App\Models\Game\Entitys\EntityInterface;
use App\Models\Game\World\Rooms\RoomInterface;

class WallRoom extends RoomModificator
{

    protected $alias = '▓';

	public function enterRoom(EntityInterface $entity, RoomInterface $room)
	{
		return 'Ой, вы стукнулись лбом об стену...';
	}

	public function getView()
    {
        return $this->alias;
    }
}
