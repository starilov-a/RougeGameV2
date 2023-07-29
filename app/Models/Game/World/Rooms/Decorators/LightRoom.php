<?php


namespace App\Models\Game\World\Rooms\Decorators;


class LightRoom extends RoomModificator
{

    const TITLE = 'Освещенная комната';

	public function checkWithFlashlight()
	{
		$text = 'С люминисцентными лампами довольно светло, но с фонариком светлее';

		return $text;
	}
}
