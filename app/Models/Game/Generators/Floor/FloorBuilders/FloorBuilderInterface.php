<?php


namespace App\Models\Game\Generators\Floor\FloorBuilders;


interface FloorBuilderInterface
{

	public function reset();
	public function createGrid();
	public function createRoomModification();
	public function createRoomItems();
	public function createRoomEntitys();

}

