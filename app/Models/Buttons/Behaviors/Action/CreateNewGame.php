<?php


namespace App\Models\Buttons\Behaviors\Action;


use App\Models\Session;

class CreateNewGame implements ActionBehaviors
{

    private $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function action()
    {
        $session = new Session();
        $session->create($this->userId);

        return 'Игра содзана';
    }
}
