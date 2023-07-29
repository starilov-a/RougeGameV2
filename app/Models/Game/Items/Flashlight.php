<?php


namespace App\Models\Game\Items;


class Flashlight extends Item
{

    const TITLE = 'Фонарик';
    const KEY = 'flashlight';

    public function use()
    {
        $session = session('botSession');
        return $session->game->player->getCurrentRoom()->checkWithFlashlight();
    }

}
