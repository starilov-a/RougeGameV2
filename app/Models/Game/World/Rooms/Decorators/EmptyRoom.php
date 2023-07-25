<?php


namespace App\Models\Game\World\Rooms\Decorators;


use App\Models\Game\Entitys\EntityInterface;

class EmptyRoom extends RoomModificator
{
	public function enter(EntityInterface $entity)
	{
        $text = '';
		$this->room->setEntity($entity);

        $entity->getCurrentRoom()->exitRoom($entity);
        $entity->setCurrentRoom($this);
        $nameEntity = $entity->getEntityName();
		if ($nameEntity == "Player") {
		    $this->setVisitedStatus();
            $text = 'Топ-топ в другую комнату';
        }

		return $text;
	}
}
