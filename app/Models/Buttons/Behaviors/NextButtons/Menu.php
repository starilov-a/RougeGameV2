<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


use App\Models\Session;

abstract class Menu implements NextButtonsBehavior
{

    public $game;
    public $meta;

    public function __construct()
    {
        $session = session('botSession');

        $this->game = &$session->game;
        $this->meta = &$session->meta;
        $this->meta->menuHistory[] = array_reverse(explode('\\', __CLASS__))[0];
    }

}
