<?php


namespace App\Models\Game\World\Rooms;


use App\Models\Game\Entitys\EntityInterface;
use App\Models\Game\Interfaces\ViewInterface;

class Room implements RoomInterface, ViewInterface
{
    protected $id;
	protected $items = [];
	protected $entity = [];
	protected $flags = [
		'visited' => false,
        'flashed' => false,
		'fog' => 2,
	];
    protected $alieses = [
        0 => '✘',
        1 => '░',
        2 => '▓'
    ];


	public function __construct($id)
    {
        $this->id = $id;
    }

    public function getFlags($flag)
    {
        return $this->flags[$flag];
    }

    public function setFlags($flag, $status)
    {
       $this->flags[$flag] = $status;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getInfo()
	{
		return '';
	}

	public function enterRoom(EntityInterface $entity, RoomInterface $room)
	{
		return '';
	}

    public function exitRoom(EntityInterface $entity)
    {
        $nameEntity = $entity->getEntityName();
        unset($this->entity[$nameEntity]);
    }

	public function checkWithFlashlight()
	{
		return '';
	}

	public function getFogStatus()
	{
		return $this->flags['fog'];
	}

	public function setFogStatus($status)
	{
		$this->flags['fog'] = $status;
	}

	public function setEntity(EntityInterface $entity) {
		$nameEntity = $entity->getEntityName();
		$this->entity[$nameEntity][] = $entity;
	}

    public function getEntity() {
        return $this->entity;
    }

	public function getView()
    {
        return $this->alieses[$this->flags['fog']];
    }

    public function getVisitedStatus()
    {
        return $this->flags['visited'];
    }

    public function setVisitedStatus()
    {
        $this->flags['visited'] = true;
        $this->flags['fog'] = 0;
    }
}


