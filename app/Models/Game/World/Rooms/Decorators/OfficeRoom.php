<?php


namespace App\Models\Game\World\Rooms\Decorators;


class OfficeRoom extends RoomModificator
{

    const TITLE = 'Офисная комната';

	public function getInfo()
	{
		$text = 'Хм, это помещение выглядит как офис, но где же окна?..' . "\r\n\r\n";

		return $text;
	}
}
