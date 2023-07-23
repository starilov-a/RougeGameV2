<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


abstract class GeneratedMenu extends Menu
{
    public function nextButtons() {
        return $this->itemsForGenerate();
    }

    abstract protected function itemsForGenerate();
}
