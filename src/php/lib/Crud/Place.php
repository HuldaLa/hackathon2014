<?php

namespace Crud;

use Database\MySQL\DbResult;

class Place extends Crud {


	public function create(\Entities\Place $place) {

    $data = Array("name" => $place->getName());
		$id = $this->db->insert('places', $data);
		if ($id) {
			$place->setId($id);
			return $place;
		}

		throw new \RuntimeException("not able to create Place ", $place);
	}

  public function getAll() {
    $places = $this->db->get('places', 10);
    if (isset($places)) {
        return $places;
    }
    throw new \RuntimeException("not able to read places.");
  }

} 