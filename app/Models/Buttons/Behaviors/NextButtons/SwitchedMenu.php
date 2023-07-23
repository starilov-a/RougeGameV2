<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


class SwitchedMenu extends Menu
{
    public function nextButtons()
    {
        $menuHistory = array_reverse($this->meta->menuHistory);
        $currentMenu = array_shift($menuHistory);

        foreach ($menuHistory as $menuName) {
            if ($menuName != $currentMenu && $menuName !='SwitchedPage') {
                $nextButtonsBehavior = __NAMESPACE__ . '\\' . $menuName;
                return new $nextButtonsBehavior();
            }
        }
    }
}
