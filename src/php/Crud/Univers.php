<?php

namespace Crud;


use Database\MySQL\DbResult;
use Entities\Character;

class Universe extends Crud {

	public function getById($id) {
		$result = $this->db->query("SELECT * FROM universe WHERE id = %d", $id);
		if ($result instanceof DbResult) {
			return $result->fetchAssoc();
		}

		throw new \RuntimeException("not able to read universe ", $id);
	}

	public function getUniverseByChar(Character $char) {
		$result = $this->db->query("SELECT u.* FROM universe_people up JOIN universe u ON up.universe_id = u.id WHERE up.people_id = %d", $char->getId());
		if ($result instanceof DbResult) {
			return $result->fetchAssoc();
		}

		throw new \RuntimeException("not able to read universe ", $char);
	}
} 