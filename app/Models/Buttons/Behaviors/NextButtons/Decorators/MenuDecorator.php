<?php


namespace App\Models\Buttons\Behaviors\NextButtons\Decorators;


use App\Models\Buttons\Behaviors\NextButtons\NextButtonsBehavior;

abstract class MenuDecorator implements NextButtonsBehavior
{

    protected $menu;

    public function __construct(NextButtonsBehavior $menu)
    {
        $this->menu = $menu;
    }

    abstract public function nextButtons();
}
