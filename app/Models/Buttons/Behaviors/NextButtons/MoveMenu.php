<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


use App\Models\Buttons\InGame\MoveDown;
use App\Models\Buttons\InGame\MoveLeft;
use App\Models\Buttons\InGame\MoveRight;
use App\Models\Buttons\InGame\MoveUp;
use App\Models\Buttons\InGame\PlayerInventory;
use App\Models\Buttons\Meta\Back;

class MoveMenu extends Menu
{

    public function nextButtons()
    {
        return [
            'keyboard' => [
                [
                    [
                        'text' => MoveUp::TEXT_BUTTON
                    ]
                ],
                [
                    [
                        'text' => MoveLeft::TEXT_BUTTON
                    ],
                    [
                        'text' => MoveRight::TEXT_BUTTON
                    ]
                ],
                [
                    [
                        'text' => MoveDown::TEXT_BUTTON
                    ]
                ],
                [
                    [
                        'text' => Back::TEXT_BUTTON
                    ]
                ],
            ],
            'resize_keyboard' => true
        ];
    }
}
