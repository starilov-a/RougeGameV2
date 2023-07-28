<?php


namespace App\Models\Buttons\Behaviors\Action;


class MoveAction extends Action
{

    protected $direction;

    public function __construct($direction)
    {
        parent::__construct();
        $this->direction = $direction;
    }

    public function action()
    {
        $player = $this->game->player;
        $roomsNear = $this->game->world->getRoomsNearEntity($player);

        if ($this->direction == 'up') {
            $text = $player->changeRoom($roomsNear['up']);
        } elseif ($this->direction == 'down') {
            $text = $player->changeRoom($roomsNear['down']);
        } elseif ($this->direction == 'right') {
            $text = $player->changeRoom($roomsNear['right']);
        } elseif ($this->direction == 'left') {
            $text = $player->changeRoom($roomsNear['left']);
        }

        //изменение статуса тумана вокруг player
        $roomsNear = $this->game->world->getRoomsNearEntity($player);
        foreach ($roomsNear as $room)
            $room->setFogStatus(1);

        $text .= "\r\n\r\n" . $this->game->world->viewMap();

        return $text;
    }
}
