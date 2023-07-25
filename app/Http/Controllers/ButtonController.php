<?php


namespace App\Http\Controllers;


use App\Models\Session;

class ButtonController
{
    private $links = [
        'inGame' => [
            'Инвентарь' => 'InventoryButton',
            'Карта' => 'FloorMap',
            'Фонарик' => 'Flashlight',
            'Движение' => 'Movement',
            'Вверх' => 'MoveUp',
            'Вправо' => 'MoveRight',
            'Влево' => 'MoveLeft',
            'Вниз' => 'MoveDown',
        ],
        'outOfGame' => [
            'Начать игру' => 'StartGame',
            '/start' => 'StartGame'
        ],
        'meta' => [
            'Назад' => 'Back',
            'След. страница' => 'NextPage',
            'Пред. страница' => 'PreviousPage',
        ]
    ];

    public function index($message, $userId)
    {
        $session = Session::init($userId);
        $session->meta->setMessage($message);

        session(['botSession' => $session]);

        if (isset($this->links['inGame'][$message]) && $session->game->startedStatus()){
            $buttonClass = '\App\Models\Buttons\InGame'. '\\' . $this->links['inGame'][$message];
            $button = new $buttonClass();
        } elseif (isset($this->links['outOfGame'][$message]) && !$session->game->startedStatus()) {
            $buttonClass = '\App\Models\Buttons\OutOfGame'. '\\' . $this->links['outOfGame'][$message];
            $button = new $buttonClass();
        } elseif (isset($this->links['meta'][$message])) {
            $buttonClass = '\App\Models\Buttons\Meta'. '\\' . $this->links['meta'][$message];
            $button = new $buttonClass();
        } else {
            return ['Неизвестная команда', false];
        }
        $message = $button->action();
        $buttons = $button->nextButtons();

        $session->close();
        //var_dump($message, $buttons);exit;

        return [$message,$buttons];
    }

}
