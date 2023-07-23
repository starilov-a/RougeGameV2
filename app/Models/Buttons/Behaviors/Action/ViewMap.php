<?php


namespace App\Models\Buttons\Behaviors\Action;


class ViewMap extends Action
{

    public function action()
    {
        return $this->game->world->viewMap();
    }
}
