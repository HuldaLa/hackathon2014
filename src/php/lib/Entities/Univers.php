<?php
/**
 * Created by PhpStorm.
 * User: michael.indyk
 * Date: 07.06.14
 * Time: 18:59
 */

namespace Entities;


class Universe {

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

	public function __toString() {
		return $this->name;
	}
} 