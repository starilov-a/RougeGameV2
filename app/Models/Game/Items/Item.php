<?php


namespace App\Models\Game\Items;


abstract class Item implements ItemInterface
{

    const TITLE = '';
    const KEY = '';

    public function getInfo()
    {
        return $this::TITLE;
    }

    public function getKeyAlias()
    {
        return $this::KEY;
    }

    public function getTitle()
    {
        return $this::TITLE;
    }
}
