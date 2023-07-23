<?php


namespace App\Models\Game\Generators\Floor\FloorBuilders;


abstract class FloorBuilder implements FloorBuilderInterface
{
	protected $floor;

	public function getResult()
	{
		return $this->floor;
	}
}
