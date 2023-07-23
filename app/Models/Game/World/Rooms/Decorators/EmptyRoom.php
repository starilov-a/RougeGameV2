<?php


namespace App\Models\Game\World\Rooms\Decorators;


use App\Models\Game\Entitys\EntityInterface;

class EmptyRoom extends RoomModificator
{
	public function enter(EntityInterface $entity)
	{
        $text = '';

		$this->room->setEntity($entity);

        $nameEntity = $entity->getEntityName();
		if ($nameEntity == "Player") {
		    $this->setVisitedStatus();
            $text = 'Вы прошли в сосденее помещение';
        }


		return $text;
	}
}
