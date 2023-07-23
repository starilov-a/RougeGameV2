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

        for ($founded = false, $r = 0; $r < count($this->grid); $r++) {
            if ($founded)
                break;
            for ($c = 0; $c < count($this->grid[$r]); $c++) {
                if ($this->grid[$r][$c]->getId() == $entityRoom->getId()) {
                    $roomUp = &$this->grid[$r-1][$c];
                    $roomDown = &$this->grid[$r+1][$c];
                    $roomRight = &$this->grid[$r][$c+1];
                    $roomLeft = &$this->grid[$r-1][$c-1];
                    $founded = true;
                    break;
                }
            }
        }

        return $roomsNear = [
            'up' => $roomUp,
            'down' => $roomDown,
            'right' => $roomRight,
            'left' => $roomLeft
        ];
    }

    public function viewMap()
    {
        $view = "Карта этажа " . self::LVL . ": \"" . self::TITLE . "\"" . "|\r\n" . "|\r\n";

        for ($r = 0; $r < count($this->grid); $r++) {
            $view .= "|";
            for ($c = 0; $c < count($this->grid[$r]); $c++)
                $view .= $this->grid[$r][$c]->getView() . "|";
            $view .= "\r\n";
        }

        return $this->grid;
    }

    public function randomEmptyRoom() {
	    do {
            $r = rand(0, count($this->grid) - 1);
            $c = rand(0, count($this->grid) - 1);
            if (!($this->grid[$r][$c] instanceof WallRoom)) {
                $randRoom = &$this->grid[$r][$c];
                return $randRoom;
            }
        } while (true);
    }
}
