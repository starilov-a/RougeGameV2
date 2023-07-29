<?php


namespace App\Models\Game\Entitys;


use App\Models\Game\Entitys\Interfaces\HaveItemIntarface;
use App\Models\Game\Items\ItemInterface;

Class Player extends Entity implements HaveItemIntarface
{

	protected $items;

	public function setItem(ItemInterface $item)
    {
        $this->items[$item->getKeyAlias()] = $item;
    }

    public function useItem(string $itemAlias)
    {
        return $this->items[$itemAlias]->use();
    }

    public function getItmes()
    {
        return $this->items;
    }

    public function issetItem(string $itemAlias)
    {
        return isset($this->items[$itemAlias]);
    }

}
