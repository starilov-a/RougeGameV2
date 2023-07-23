<?php


namespace App\Models\Game\Generators\Floor;


use App\Models\Game\Generators\Floor\FloorBuilders\FloorBuilderInterface;

class FloorDirector
{

	public function createFloor(FloorBuilderInterface $builder)
	{
		$builder->reset();
		$builder->createGrid();
		$builder->createRoomModification();
		$builder->createRoomItems();
		$builder->createRoomEntitys();
	}

}
