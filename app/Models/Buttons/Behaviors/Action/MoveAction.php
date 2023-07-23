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
            $player->enterRoom($roomsNear['up']);
        } elseif ($this->direction == 'down') {
            $player->enterRoom($roomsNear['dwon']);
        } elseif ($this->direction == 'right') {
            $player->enterRoom($roomsNear['right']);
        } elseif ($this->direction == 'left') {
            $player->enterRoom($roomsNear['left']);
        }

        //изменение статуса тумана вокруг player
        $roomsNear = $this->game->world->getRoomsNearEntity($player);
        foreach ($roomsNear as $room)
            $room->setFogStatus(1);

        return 'Топ-топ в другую комнату';
    }
}
