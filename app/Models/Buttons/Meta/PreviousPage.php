<?php


namespace App\Models\Buttons\Meta;


use App\Models\Buttons\Behaviors\Action\EmptyAction;
use App\Models\Buttons\Behaviors\NextButtons\Decorators\PreviousPageMenu;
use App\Models\Buttons\Behaviors\NextButtons\SwitchedMenu;

class PreviousPage extends \App\Models\Buttons\Button
{

    const TEXT_BUTTON = 'Пред. страница';

    public function __construct()
    {
        $this->setActionBehavior(new EmptyAction());
        $this->setNextButtonsBehavior(new PreviousPageMenu(new SwitchedMenu()));
    }
}
