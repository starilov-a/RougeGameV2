<?php


namespace App\Models\Buttons\Behaviors\NextButtons;


class MainGameMenu implements NextButtonsBehavior
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
//                ],
//                [
//                    [
//                        'text' => 'Инвентарь'
//                    ],
                    [
                        'text' => 'Исследовать'
                    ]
                ]
            ],
            'resize_keyboard' => true
        ];
    }
}
