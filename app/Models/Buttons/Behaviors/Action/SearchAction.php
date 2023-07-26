<?php


namespace App\Models\Buttons\Behaviors\Action;


class SearchAction extends Action
{

    public function action()
    {
        $text = "Вы оглянулись:"."\r\n\r\n";
        $text = $this->game->player->getCurrentRoom()->getInfo();

        return $text;
    }
}
