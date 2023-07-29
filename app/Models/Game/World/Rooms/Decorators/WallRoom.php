<?php


namespace App\Models\Game\World\Rooms\Decorators;



use App\Models\Game\Entitys\Interfaces\EntityInterface;
use App\Models\Game\World\Rooms\RoomInterface;

class WallRoom extends RoomModificator
{

    const TITLE = 'Стена';

    protected $alias = '▓';

	public function enterRoom(EntityInterface $entity, RoomInterface $room)
	{
		return 'Ой, вы стукнулись лбом об стену...' . "\r\n\r\n";
	}

	public function getView()
    {
        return $this->alias;
    }
}
