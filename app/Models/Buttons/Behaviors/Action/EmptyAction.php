<?php


namespace App\Models\Buttons\Behaviors\Action;


class EmptyAction extends Action
{

    const MESSAGE = '...';

    public function action()
    {
        return self::MESSAGE;
    }
}
