<?php


namespace App\Models\Buttons\Behaviors\Action;


use App\Models\Session;

abstract class Action implements ActionBehaviors
{

    protected $game;
    protected $meta;

    public function __construct()
    {
        $session = session('botSession');

        $this->game = $session->game;
        $this->meta = $session->meta;
        $this->meta->actionHistory[] = array_reverse(explode('\\', get_called_class()))[0];
    }
}
