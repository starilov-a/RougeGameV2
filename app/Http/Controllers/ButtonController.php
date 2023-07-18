<?php


namespace App\Http\Controllers;


use App\Models\Buttons\OutOfGame\IndefiedButton;

class ButtonController
{
    private $links = [
        'Идти' => 'MoveButton',
        'Инвентарь' => 'InventoryButton',
        ];

    public function index($message, $userId)
    {
        if (isset($this->links[$message])){
            $button = new $this->links[$message]($userId);
        } else {
            //ДУМАЮ-ссс
            $button = new IndefiedButton($userId);
        }

        $message = $button->action();
        $buttons = $button->nextButtons();

        return [$message,$buttons];
    }

}
