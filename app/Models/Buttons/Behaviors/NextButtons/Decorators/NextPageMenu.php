<?php


namespace App\Models\Buttons\Behaviors\NextButtons\Decorators;


class NextPageMenu extends MenuDecorator
{

    public function nextButtons()
    {
        $this->menu->meta->menuPage++;
        return $this->menu->nextButtons();
    }
}
