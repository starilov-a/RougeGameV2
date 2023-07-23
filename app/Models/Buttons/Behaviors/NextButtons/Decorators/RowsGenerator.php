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
            $items[$key] = ['text' => $item->title];
        $playerItemsRows = array_chunk($items, 3);
        $playerItemsSliced = array_slice($playerItemsRows, $this->meta->menuPage, $rowInMenu);

        $keyboard[] = $playerItemsSliced;
        if (count($playerItemsRows) > $rowInMenu && $this->meta->menuPage == 0) {
            $keyboard[] = [
                [
                    'text' => NextPage::TEXT_BUTTON
                ],
            ];
        } elseif (count($playerItemsRows) > $rowInMenu && count($playerItemsRows) - $this->meta->menuPage != 0) {
            $keyboard[] = [
                [
                    'text' => PreviousPage::TEXT_BUTTON
                ],
                [
                    'text' => NextPage::TEXT_BUTTON
                ],
            ];
        } elseif (count($playerItemsRows) > $rowInMenu) {
            $keyboard[] = [
                [
                    'text' => PreviousPage::TEXT_BUTTON
                ]
            ];
        }

        $keyboard[] = [
            [
                'text' => Back::TEXT_BUTTON
            ]
        ];

        return [
            'keyboard' => $keyboard,
            'resize_keyboard' => true
        ];
    }
}
