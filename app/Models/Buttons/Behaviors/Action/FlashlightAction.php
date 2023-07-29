<?php


namespace App\Models\Buttons\Behaviors\Action;


class FlashlightAction extends Action
{

    const MESSAGE = '*Вы посветили фонариком*' . "\r\n";

    public function action()
    {
        $aliasItem = 'flashlight';

        $player = $this->game->player;
        if ($player->issetItem($aliasItem))
            return $this::MESSAGE . "\r\n" . $player->useItem($aliasItem);
        else
            return 'Вы пытаетесь нащупать фонарь в кармане плащя, но все тщетно...';
    }
}
