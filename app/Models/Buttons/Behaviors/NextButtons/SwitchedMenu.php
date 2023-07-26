<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


class SwitchedMenu extends Menu
{
    public function nextButtons()
    {
        $menuHistory = array_reverse($this->meta->menuHistory);
        $currentMenu = $menuHistory[1];

        foreach ($menuHistory as $menuName) {
            if ($menuName != $currentMenu && $menuName != 'SwitchedMenu') {
                $nextButtonsBehavior = __NAMESPACE__ . '\\' . $menuName;

                $behavior =  new $nextButtonsBehavior();
                return $behavior->nextButtons();
            }
        }
    }
}
