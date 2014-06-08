<?php

namespace Crud;

use Database\MySQL\DbResult;

class Location extends Crud {


	public function create(\Entities\Location $location) {

        $data = Array("name" => $location->getName());
		$id = $this->db->insert('places', $data);
		if ($id) {
			$location->setId($id);
			return $location;
		}

		throw new \RuntimeException("not able to create location ", $location);
	}
} 