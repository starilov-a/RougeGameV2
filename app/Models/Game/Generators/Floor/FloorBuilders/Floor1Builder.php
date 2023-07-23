<?php


namespace App\Models\Game\Generators\Floor\FloorBuilders;


use App\Models\Game\World\Floors\Floor1;
use App\Models\Game\World\Rooms\Decorators\DarkRoom;
use App\Models\Game\World\Rooms\Decorators\EmptyRoom;
use App\Models\Game\World\Rooms\Decorators\LightRoom;
use App\Models\Game\World\Rooms\Decorators\OfficeRoom;
use App\Models\Game\World\Rooms\Decorators\WallRoom;
use App\Models\Game\World\Rooms\Room;

class Floor1Builder extends FloorBuilder
{
	const SIZE_FLOOR = 5;

	public function reset() {
		$this->floor = new Floor1();
	}

	public function createGrid() {
		$grid = [];

		for ($id = 1, $r = 0; $r < self::SIZE_FLOOR; $r++, $id++) {
			for ($c = 0; $c < self::SIZE_FLOOR; $c++) {
				$grid[$r][$c] = new Room($id);
			}
		}

		$this->floor->setGrid($grid);
	}

	public function createRoomModification() {
		$grid = $this->floor->getGrid();
		$randomazer = new \Random\Randomizer();

		//Расстановка стен
		for ($wallCount = 10, $i = 0; $i < $wallCount; $i++) {
			do {
				$r = rand(0, 14);
				$c = rand(0, 14);
			} while ($grid[$r][$c] instanceof WallRoom);
			$grid[$r][$c] = new WallRoom($grid[$r][$c]);
		}

		//Расстановка пустых офисных комнат
		for ($r = 0; $r < self::SIZE_FLOOR; $r++) {
			for ($c = 0; $c < self::SIZE_FLOOR; $c++) {
				if (!($grid[$r][$c] instanceof WallRoom)) {
					$grid[$r][$c] = new OfficeRoom(new EmptyRoom($grid[$r][$c]));
					$officesRoomsCoords[] = [$r, $c];
				}
			}
		}

		//Расстановка темных комнат
		$coordsStack = $officesRoomsCoords;
		shuffle($coordsStack);
		$coordsStack = array_values(array_keys($coordsStack));
		for ($darkRooms = 2, $i = 0; $i < $darkRooms; $i++) {
			$r = $coordsStack[$i][0];
			$c = $coordsStack[$i][1];
			$grid[$r][$c] = new DarkRoom($grid[$r][$c]);
		}

		//Расстановка светлых комнат
		for ($r = 0; $r < self::SIZE_FLOOR; $r++) {
			for ($c = 0; $c < self::SIZE_FLOOR; $c++) {
				if (!($grid[$r][$c] instanceof WallRoom) && !($grid[$r][$c] instanceof DarkRoom)) {
					$grid[$r][$c] = new LightRoom($grid[$r][$c]);
				}
			}
		}
	}

	public function createRoomItems()
	{
		return false;
	}

	public function createRoomEntitys()
	{
		//Создание игрока

	}

}
