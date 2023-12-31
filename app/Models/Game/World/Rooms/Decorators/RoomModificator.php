<?php


namespace App\Models\Game\World\Rooms\Decorators;


use App\Models\Game\Entitys\Interfaces\EntityInterface;
use App\Models\Game\Interfaces\ViewInterface;
use App\Models\Game\World\Rooms\RoomInterface;

abstract class RoomModificator implements RoomInterface, ViewInterface
{

	protected $room;

	public function __construct(RoomInterface $room) {
		$this->room = $room;
	}

	public function getId()
    {
        return $this->room->getId();
    }

    public function enterRoom(EntityInterface $entity, RoomInterface $room)
	{
		return $this->room->enterRoom($entity, $room);
	}

    public function exitRoom(EntityInterface $entity)
    {
        return $this->room->exitRoom($entity);
    }

	public function getInfo()
	{
		return $this->room->getInfo();
	}

    public function getTitle()
    {
        return $this->room->getTitle();
    }

	public function checkWithFlashlight()
	{
		return $this->room->checkWithFlashlight();
	}

	public function getFogStatus()
	{
		return $this->room->getFogStatus();
	}

	public function setFogStatus($status)
	{
		return $this->room->setFogStatus($status);
	}

	public function setEntity(EntityInterface $entity)
	{
		return $this->room->setEntity($entity);
	}

	public function getFlags($flag)
    {
        return $this->room->getFlags($flag);
    }

    public function setFlags($flag, $status)
    {
        $this->room->setFlags($flag, $status);
    }

    public function getVisitedStatus()
    {
        return $this->room->getVisitedStatus();
    }

    public function setVisitedStatus()
    {
        $this->room->setVisitedStatus();
    }

    public function getView()
    {
        return $this->room->getView();
    }

    public function getEntity() {
        return $this->room->getEntity();
    }
}

