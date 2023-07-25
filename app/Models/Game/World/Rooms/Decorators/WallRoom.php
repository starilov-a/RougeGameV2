<?php


namespace App\Models\Game\World\Rooms\Decorators;


use App\Models\Game\Entitys\EntityInterface;

class WallRoom extends RoomModificator
{

    protected $alias = '▓';

	public function enter(EntityInterface $entity)
	{
		return 'Ой, вы стукнулись лбом об стену...';
	}

	public function getView()
    {
        return $this->alias;
    }
}
