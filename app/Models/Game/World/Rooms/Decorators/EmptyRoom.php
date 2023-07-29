<?php


namespace App\Models\Game\World\Rooms\Decorators;


use App\Models\Game\Entitys\Interfaces\EntityInterface;
use App\Models\Game\World\Rooms\RoomInterface;

class EmptyRoom extends RoomModificator
{

    const TITLE = 'Пустая комната';

	public function enterRoom(EntityInterface $entity, RoomInterface $room)
	{
        $text = '';
		$this->room->setEntity($entity);

        $entity->setCurrentRoom($room);
        $nameEntity = $entity->getEntityName();
		if ($nameEntity == "Player") {
		    $this->setVisitedStatus();
            $text = '*Топ-топ в другую комнату*' . "\r\n\r\n";
        }

		return $text;
	}
}
