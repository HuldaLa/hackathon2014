<?php

namespace Crud;

use Database\MySQL\DbResult;

class Location extends Crud {


	public function create(\Entities\Location $location) {
		$result = $this->db->query("INSERT INTO location (name) VALUES ('%s')", $location->getName());
		if ($result instanceof DbResult) {
			$location->setId($this->db->getLastInsertId());
			return $location;
		}


		throw new \RuntimeException("not able to create universe ", $location);
	}
} 