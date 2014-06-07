<?php

namespace Crud;


use Database\MySQL\DbResult;

class Character extends Crud {

	/**
	 * @param \Entities\Character $char
	 * @throws \RuntimeException
	 * @todo transaction
	 */
	public function create(\Entities\Character $char) {
		$result = $this->db->query("INSERT INTO people (name) VALUES ('%s')", $char->getName());
		if ($result === false) {
			throw new \RuntimeException('not able to create character ' . $char);
		}
		$char->setId($this->db->getLastInsertId());
		$result = $this->db->query("INSERT INTO people_universe (people_id, universe_id)", $char->getId(), $char->getUniverse()->getId());
		if ($result === false) {
			throw new \RuntimeException('not able to create character ' . $char);
		}
	}

	/**
	 * @param $id
	 * @return array
	 * @throws \RuntimeException
	 */
	public function getById($id) {
		$result = $this->db->query("SELECT * FROM people WHERE id = %d", $id);
		if ($result instanceof DbResult) {
			return $result->fetchAssoc();
		}

		throw new \RuntimeException("not table to read people id " +  $id);
	}
} 