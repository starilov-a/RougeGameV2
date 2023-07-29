<?php


namespace App\Models\Game\World\Rooms;



use App\Models\Game\Entitys\Interfaces\EntityInterface;
use App\Models\Game\Interfaces\InfoInterface;

interface RoomInterface extends InfoInterface
{
    public function getId();
	public function getInfo();
	public function setFlags($flag, $status);
    public function getFlags($flag);
	public function enterRoom(EntityInterface $entity, RoomInterface $room);
    public function exitRoom(EntityInterface $entity);
	public function checkWithFlashlight();
	public function getFogStatus();
	public function setFogStatus($status);
	public function getVisitedStatus();
    public function setVisitedStatus();
	public function setEntity(EntityInterface $entity);
    public function getEntity();
}


