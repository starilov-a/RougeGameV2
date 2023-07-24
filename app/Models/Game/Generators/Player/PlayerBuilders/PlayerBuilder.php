<?php


namespace App\Models\Game\Generators\Player\PlayerBuilders;


abstract class PlayerBuilder implements PlayerBuilerInterface
{

    protected $player;
    protected $floor;

    public function __construct($floor)
    {
        $this->floor = $floor;
    }

    public function getResult()
    {
        return $this->player;
    }

}
