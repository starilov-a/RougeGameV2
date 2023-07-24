<?php


namespace App\Models;


class Meta
{
    protected $lastMessage;
    public $actionHistory = [];
    public $menuHistory = [];
    public $menuPage = 0;

    public function setMessage ($message)
    {
        $this->lastMessage = $message;
    }

    public function getMessage ()
    {
        return $this->lastMessage;
    }
}
