<?php

namespace Entities;


use Database\MySQL\Db;

class Factory
{

	private $crudCharacter;
	private $crudUniverse;

	public function __construct(Db $db)
	{
		$this->crudCharacter = new \Crud\Character($db);
		$this->crudUniverse = new \Crud\Universe($db);
	}

	public function createCharById($id)
	{
		$dbChar = $this->crudCharacter->getById($id);
		$char = $this->createCharByDbArray($dbChar);


		return $char;


	}

	public function createUniverseByDbArray(array $uni)
	{
		$universe = new Universe();
		$universe->setId($uni['id']);
		$universe->setName($uni['name']);
		return $universe;
	}

	public function createCharByDbArray(array $dbChar)
	{
		$char = new \Entities\Character();
		$char->setId($dbChar['id']);
		$char->setName($dbChar['name']);
		$dbUni = $this->crudUniverse->getUniverseByChar($char);
		$char->setUniverse($dbUni);
		return $char;
	}
} 