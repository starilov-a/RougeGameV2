<?php


namespace App\Models\Game\World\Rooms\Decorators;


class OfficeRoom extends RoomModificator
{
	public function getInfo()
	{
		$text = 'Хм, это помещение выглядит как офис, но где же окна?..';

		return $text;
	}
}
