<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


use App\Models\Buttons\InGame\ExitToMainMenu;
use App\Models\Buttons\InGame\FloorMap;
use App\Models\Buttons\InGame\MoveDown;
use App\Models\Buttons\InGame\MoveLeft;
use App\Models\Buttons\InGame\Movement;
use App\Models\Buttons\InGame\MoveRight;
use App\Models\Buttons\InGame\MoveUp;
use App\Models\Buttons\InGame\PlayerInventory;
use App\Models\Buttons\InGame\Search;
use App\Models\Buttons\InGame\MainMenu;
use App\Models\Buttons\Meta\Back;

class MainGameMenu extends Menu
{

    public function nextButtons()
    {
        return [
            'keyboard' => [
                [
                    [
                        'text' => MoveLeft::TEXT_BUTTON
                    ],
                    [
                        'text' => MoveRight::TEXT_BUTTON
                    ],
                    [
                        'text' => MoveDown::TEXT_BUTTON
                    ],
                    [
                        'text' => MoveUp::TEXT_BUTTON
                    ],
                ],
                [
                    [
                        'text' => FloorMap::TEXT_BUTTON
                    ]
                ],
                [
                    [
                        'text' => ExitToMainMenu::TEXT_BUTTON
                    ]
                ],
            ],
            'resize_keyboard' => true
        ];
    }
}
