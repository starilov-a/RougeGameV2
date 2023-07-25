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
	const SIZE_FLOOR = 10+2;

	public function reset() {
		$this->floor = new Floor1();
	}
	//1 2 3  4  5  6  7
    //8 9 10 11 12 13 14
    //15 16 17 18 19 20 21
    //22 23 24 25 26 27 28
    //29 30 31 32 33 34 35
    //15 16 17 18 19 20 21
    //15 16 17 18 19 20 21

	public function createGrid() {
		$grid = [];

        $id = 1;
		for ($id = 1, $r = 0; $r < $this::SIZE_FLOOR; $r++) {
			for ($c = 0; $c < $this::SIZE_FLOOR; $c++) {
				$grid[$r][$c] = new Room($id);
                $id++;
			}
		}

		$this->floor->setGrid($grid);
	}

	public function createRoomModification() {
		$grid = $this->floor->getGrid();

		//Расстановка стен
		for ($wallCount = 5, $i = 0; $i < $wallCount; $i++) {
			do {
				$r = rand(1, $this::SIZE_FLOOR - 2);
				$c = rand(1, $this::SIZE_FLOOR - 2);
			} while ($grid[$r][$c] instanceof WallRoom);
			$grid[$r][$c] = new WallRoom($grid[$r][$c]);
		}

        //Расстановка границ
        for ($c = 0; $c < $this::SIZE_FLOOR; $c++)
            $grid[0][$c] = new WallRoom($grid[0][$c]);
        for ($c = 0; $c < $this::SIZE_FLOOR; $c++)
            $grid[$this::SIZE_FLOOR-1][$c] = new WallRoom($grid[$this::SIZE_FLOOR-1][$c]);
        for ($c = 1; $c < $this::SIZE_FLOOR - 1; $c++)
            $grid[$c][0] = new WallRoom($grid[$c][0]);
        for ($c = 1; $c < $this::SIZE_FLOOR - 1; $c++)
            $grid[$c][$this::SIZE_FLOOR-1] = new WallRoom($grid[$c][$this::SIZE_FLOOR-1]);

		//Расстановка пустых офисных комнат
		for ($r = 0; $r < $this::SIZE_FLOOR; $r++) {
			for ($c = 0; $c < $this::SIZE_FLOOR; $c++) {
				if (!($grid[$r][$c] instanceof WallRoom)) {
					$grid[$r][$c] = new OfficeRoom(new EmptyRoom($grid[$r][$c]));
					$officesRoomsCoords[] = [$r, $c];
				}
			}
		}

        //Расстановка темных комнат
        $coordsStack = $officesRoomsCoords;
        shuffle($coordsStack);

        for ($darkRooms = 2, $i = 0; $i < $darkRooms; $i++) {
            $couple = array_pop($coordsStack);
            $r = $couple[0];
			$c = $couple[1];
			$grid[$r][$c] = new DarkRoom($grid[$r][$c]);
		}

		//Расстановка светлых комнат
		for ($r = 0; $r < $this::SIZE_FLOOR; $r++) {
			for ($c = 0; $c < $this::SIZE_FLOOR; $c++) {
				if (!($grid[$r][$c] instanceof WallRoom) && !($grid[$r][$c] instanceof DarkRoom)) {
					$grid[$r][$c] = new LightRoom($grid[$r][$c]);
				}
			}
		}

        $this->floor->setGrid($grid);
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
