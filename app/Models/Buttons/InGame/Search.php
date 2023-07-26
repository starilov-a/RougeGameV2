<?php


namespace App\Models\Buttons\InGame;


use App\Models\Buttons\Behaviors\Action\SearchAction;
use App\Models\Buttons\Behaviors\NextButtons\MainGameMenu;

class Search extends \App\Models\Buttons\Button
{

    const TEXT_BUTTON = 'Исследовать';

    public function __construct()
    {
        $this->setActionBehavior(new SearchAction());
        $this->setNextButtonsBehavior(new MainGameMenu());
    }

}
