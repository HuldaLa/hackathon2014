<?php

namespace Entities;


class Place	 {

	private $id;
	private $name;

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
	 * @param mixed $name
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getDescription()
	{
		return $this->description;
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



	public function __toString() {
		return $this->name;
	}
} 