<?php


namespace App\Models\Buttons\Behaviors\NextButtons\Decorators;


use App\Models\Buttons\Meta\Back;
use App\Models\Buttons\Meta\NextPage;
use App\Models\Buttons\Meta\PreviousPage;

class RowsGenerator extends MenuDecorator
{

    public function nextButtons()
    {
        $lastMenu = array_reverse($this->menu->meta->menuHistory)[0];
        if ($lastMenu != 'PreviousPageMenu' && $lastMenu != 'NextPageMenu')
            $this->menu->meta->menuPage = 0;

        $items = $this->menu->nextButtons();

        //TODO ХАЙ
        if (empty($items))
            return '';

        $rowInMenu = 2;

        foreach ($items as $key => $item)
            $items[$key] = ['text' => $item->getTitle()];
        $playerItemsRows = array_chunk($items, 3);

        $playerItemsSliced = array_slice($playerItemsRows, $this->menu->meta->menuPage, $rowInMenu);
        $keyboard = $playerItemsSliced;
        if (count($playerItemsRows) > $rowInMenu && $this->menu->meta->menuPage == 0) {
            array_push($keyboard,[
                [
                    'text' => NextPage::TEXT_BUTTON
                ],
            ]);
        } elseif (count($playerItemsRows) > $rowInMenu && count($playerItemsRows) - $this->menu->meta->menuPage != 0) {
            array_push($keyboard,[
                [
                    'text' => PreviousPage::TEXT_BUTTON
                ],
                [
                    'text' => NextPage::TEXT_BUTTON
                ],
            ]);
        } elseif (count($playerItemsRows) > $rowInMenu) {
            array_push($keyboard,[
                [
                    'text' => PreviousPage::TEXT_BUTTON
                ]
            ]);
        }

        array_push($keyboard,[
            [
                'text' => Back::TEXT_BUTTON
            ]
        ]);

        return [
            'keyboard' => $keyboard,
            'resize_keyboard' => true
        ];
    }
}
