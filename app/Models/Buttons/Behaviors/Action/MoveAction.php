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
            $text = $player->enterRoom($roomsNear['up']);
        } elseif ($this->direction == 'down') {
            $text = $player->enterRoom($roomsNear['down']);
        } elseif ($this->direction == 'right') {
            $text = $player->enterRoom($roomsNear['right']);
        } elseif ($this->direction == 'left') {
            $text = $player->enterRoom($roomsNear['left']);
        }

        //изменение статуса тумана вокруг player
        $roomsNear = $this->game->world->getRoomsNearEntity($player);
        foreach ($roomsNear as $room)
            $room->setFogStatus(1);

        return $text;
    }
}
