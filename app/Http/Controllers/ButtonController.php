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

            'Идти' => 'Movement',
            'Вперед' => 'MoveUp',
            'Вправо' => 'MoveRight',
            'Влево' => 'MoveLeft',
            'Назад' => 'MoveDown',
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
        $session = Session::firstOrCreate([
            'uid' => $userId
        ]);
        $session->meta->lastMssage = $message;
        session(['botSession' => $session]);

        if (isset($this->links['inGame'][$message]) && !empty($session->game)){
            $buttonClass = '\App\Models\Buttons\InGame'. '\\' . $this->links['inGame'][$message];
            $button = new $buttonClass();
        } elseif (isset($this->links['outOfGame'][$message]) && empty($session->game)) {
            $buttonClass = '\App\Models\Buttons\OutOfGame'. '\\' . $this->links['outOfGame'][$message];
            $button = new $buttonClass();
        } elseif (isset($this->links['meta'][$message])) {
            $buttonClass = '\App\Models\Buttons\Meta'. '\\' . $this->links['meta'][$message];
            $button = new $buttonClass();
        }

        $message = $button->action();
        $buttons = $button->nextButtons();

        $session->save();

        return [$message,$buttons];
    }

}
