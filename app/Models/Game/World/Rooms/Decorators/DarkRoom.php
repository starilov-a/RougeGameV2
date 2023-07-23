<?php


namespace App\Models\Game\World\Rooms\Decorators;


class DarkRoom extends RoomModificator
{
	public function checkWithFlashlight()
	{
		//TODO функционал
		$text = 'Вы осветили комнату. Она оказалась такой же как и все остальные';
		return $text . $this->room->checkWithFlashlight();
	}
}
