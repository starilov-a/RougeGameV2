<?php


namespace App\Models\Game\World\Rooms\Decorators;


class DarkRoom extends RoomModificator
{

    const TITLE = 'Темная комната';

    public function getInfo()
    {
        if ($this->getFlags('flashed') == false)
            return 'Здесь так темно... Вот бы не провалитсья под земою второй раз.'."\r\n\r\n";
        return $this->room->getInfo();
    }

    public function checkWithFlashlight()
	{
		$text = 'Вы осветили комнату. Она оказалась такой же как и все остальные' . "\r\n\r\n";
		return $text . $this->room->checkWithFlashlight();
	}
}
