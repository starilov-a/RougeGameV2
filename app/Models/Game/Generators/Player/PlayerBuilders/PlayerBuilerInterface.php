<?php


namespace App\Models\Game\Generators\Player\PlayerBuilders;


interface PlayerBuilerInterface
{
    public function reset();
    public function setInRoom();
    public function giveItems();

}
