<?php


namespace App\Models\Game\Entitys\Interfaces;


use App\Models\Game\Items\ItemInterface;

interface HaveItemIntarface
{
    public function setItem(ItemInterface $item);
    public function useItem(string $itemAlias);
    public function getItmes();
    public function issetItem(string $itemAlias);
}
