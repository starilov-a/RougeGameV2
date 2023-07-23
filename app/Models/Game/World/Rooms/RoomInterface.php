<?php


namespace App\Models\Game\World\Rooms;


use App\Models\Game\Entitys\EntityInterface;

interface RoomInterface
{
    public function getId();
	public function getInfo();
	public function setFlags($flag, $status);
    public function getFlags($flag);
	public function enter(EntityInterface $entity);
    public function exitRoom(EntityInterface $entity);
	public function checkWithFlashlight();
	public function getFogStatus();
	public function setFogStatus($status);
	public function getVisitedStatus();
    public function setVisitedStatus();
	public function setEntity(EntityInterface $entity);
}

