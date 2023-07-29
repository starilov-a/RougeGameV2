<?php


namespace App\Models\Buttons\Behaviors\Action;


class OpenInventory extends Action
{

    const MESSAGE = 'Тааак, что у меня есть?';

    public function action()
    {
        return $this::MESSAGE;
    }
}
