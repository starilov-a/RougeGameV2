<?php


namespace App\Models\Game\World\Floors;


use App\Models\Game\Entitys\EntityInterface;
use App\Models\Game\World\Rooms\Decorators\WallRoom;

abstract class Floor
{
	const TITLE = '';
	const LVL = 0;

	protected $grid = [];

	public function setGrid($grid)
    {
		$this->grid = $grid;
	}

	public function getGrid()
    {
		return $this->grid;
	}

	public function getRoomsNearEntity(EntityInterface $entity)
    {
        $roomsNear = [];
        $entityRoom = $entity->getCurrentRoom();

        for ($founded = false, $r = 1; $r < count($this->grid) - 1; $r++) {
            if ($founded)
                break;
            for ($c = 1; $c < count($this->grid[$r]) - 1; $c++) {
                if ($this->grid[$r][$c] === $entityRoom) {
                    $roomsNear['up'] = $this->grid[$r-1][$c];
                    $roomsNear['down'] = $this->grid[$r+1][$c];
                    $roomsNear['right'] = $this->grid[$r][$c+1];
                    $roomsNear['left'] = $this->grid[$r][$c-1];

                    $founded = true;
                    break;
                }
            }
        }
        return $roomsNear;
    }

    public function viewMap()
    {
        $view = "Карта этажа " . $this::LVL . " -  \"" . $this::TITLE . "\"" . "\r\n" . "\r\n";

        for ($r = 0; $r < count($this->grid); $r++) {
            $view .= "|";
            for ($c = 0; $c < count($this->grid[$r]); $c++)
                $view .= $this->grid[$r][$c]->getView() . "|";
            $view .= "\r\n";
        }

        return $view;
    }

    public function randomEmptyRoom() {
	    do {
	        $maxCell = count($this->grid) - 1;
            $r = rand(1, $maxCell);
            $c = rand(1, $maxCell);
            if (!($this->grid[$r][$c] instanceof WallRoom)) {
                $randRoom = $this->grid[$r][$c];
                return $randRoom;
            }
        } while (true);
    }
}
