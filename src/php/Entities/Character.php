<?php

namespace Entities;

class Character {
	private $id;
	private $name;
	private $universe;

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $universe
	 */
	public function setUniverse($universe)
	{
		$this->universe = $universe;
	}

	/**
	 * @return mixed
	 */
	public function getUniverse()
	{
		return $this->universe;
	}
} 