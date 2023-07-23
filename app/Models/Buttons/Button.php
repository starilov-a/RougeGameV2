<?php


namespace App\Models\Buttons;


abstract class Button
{

    private $behaviorAction;
    private $behaviorNextButtons;

    const TEXT_BUTTON = '';

    public static function getTextButton()
    {
        return self::TEXT_BUTTON;
    }

    public function action()
    {
        $this->behaviorAction->action();
    }

    public function nextButtons()
    {
        $this->behaviorAction->nextButtons();
    }

    public function setNextButtonsBehavior(\App\Models\Buttons\Behaviors\NextButtons\NextButtonsBehavior $nbb)
    {
        $this->behaviorNextButtons = $nbb;
    }

    public function setActionBehavior(\App\Models\Buttons\Behaviors\Action\ActionBehaviors $ab)
    {
        $this->behaviorAction = $ab;
    }

}
