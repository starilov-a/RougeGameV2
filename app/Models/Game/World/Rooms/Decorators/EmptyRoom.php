<?php


namespace App\Models\Game\World\Rooms\Decorators;


use App\Models\Game\Entitys\EntityInterface;
use App\Models\Game\World\Rooms\RoomInterface;

class EmptyRoom extends RoomModificator
{
	public function enterRoom(EntityInterface $entity, RoomInterface $room)
	{
        $text = '';
		$this->room->setEntity($entity);

        $entity->setCurrentRoom($room);
        $nameEntity = $entity->getEntityName();
		if ($nameEntity == "Player") {
		    $this->setVisitedStatus();
            $text = 'Топ-топ в другую комнату';
        }

		return $text;
	}
}
