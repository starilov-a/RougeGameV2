<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


use App\Models\Buttons\OutOfGame\LoadGame;
use App\Models\Buttons\OutOfGame\NewGame;

class MainMenu extends Menu
{

    public function nextButtons()
    {
        return [
            'keyboard' => [
                [
                    [
                        'text' => NewGame::TEXT_BUTTON
                    ]
                ],
                [
                    [
                        'text' => LoadGame::TEXT_BUTTON
                    ]
                ]
            ],
            'resize_keyboard' => true
        ];
    }
}
