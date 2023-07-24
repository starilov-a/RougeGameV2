<?php


namespace App\Models\Buttons;


abstract class Button
{

    protected $behaviorAction;
    protected $behaviorNextButtons;

    const TEXT_BUTTON = '';

    public static function getTextButton()
    {
        return self::TEXT_BUTTON;
    }

    public function action()
    {
        return $this->behaviorAction->action();
    }

    public function nextButtons()
    {
        return $this->behaviorNextButtons->nextButtons();
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
