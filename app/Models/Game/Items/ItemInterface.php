<?php


namespace App\Models\Game\Items;


use App\Models\Game\Interfaces\InfoInterface;

interface ItemInterface extends InfoInterface
{
    public function use();
    public function getKeyAlias();
    public function getTitle();
}
