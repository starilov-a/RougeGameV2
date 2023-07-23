<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


use App\Models\Buttons\InGame\PlayerInventory;
use App\Models\Buttons\Meta\Back;

class MainGameMenu extends Menu implements NextButtonsBehavior
{

    public function nextButtons()
    {
        return [
            'keyboard' => [
                [
                    [
                        'text' => 'Идти'
                    ],
//                    [
//                        'text' => 'Атаковать'
//                    ],
//                    [
//                        'text' => 'Говорить'
//                    ],
                ],
                [
                    [
                        'text' => PlayerInventory::TEXT_BUTTON
                    ],
                    [
                        'text' => 'Исследовать'
                    ],
                    [
                        'text' => Back::TEXT_BUTTON
                    ]
                ]
            ],
            'resize_keyboard' => true
        ];
    }
}
