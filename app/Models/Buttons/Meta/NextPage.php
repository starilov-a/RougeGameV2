<?php


namespace App\Models\Buttons\Meta;


use App\Models\Buttons\Behaviors\Action\EmptyAction;
use App\Models\Buttons\Behaviors\NextButtons\Decorators\NextPageMenu;
use App\Models\Buttons\Behaviors\NextButtons\SwitchedMenu;

class NextPage extends \App\Models\Buttons\Button
{

    const TEXT_BUTTON = 'След. страница';

    public function __construct()
    {
        $this->setActionBehavior(new EmptyAction());
        $this->setNextButtonsBehavior(new NextPageMenu(new SwitchedMenu()));

    }
}
