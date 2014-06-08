<?php

namespace Crud;

use Entities\Character;

class Universe extends Crud {

	public function getById($id) {
        $this->db->where ("id", $id);
        $universe = $this->db->getOne ("universe");
		if (isset($universe)) {
			return $universe;
		}

		throw new \RuntimeException("not able to read universe ", $id);
	}

    public function getAll() {
        $universes = $this->db->get('universes');
        if (isset($universes)) {
            return $universes;
        }
        throw new \RuntimeException("not able to read universes.");
    }

	public function getUniverseByChar(Character $char) {
        $this->db->join("characters_universes cu", "cu.univers_id=u.ID", "LEFT");
        $this->db->where("cu.character_id", $char->getId());
        $universes = $this->db->get ("universes u", null, "u.*");
		if (isset($universes)) {
			return $universes;
		}

		throw new \RuntimeException("not able to read universe ", $char);
	}

	/**
	 * @param \Entities\Universe $universe
	 * @return \Entities\Universe
	 * @throws \RuntimeException
	 */
	public function create(\Entities\Universe $universe) {
        $data = Array("name" => $universe->getName());
        $id = $this->db->insert('universes', $data);
        if ($id) {
            $universe->setId($id);
            return $universe;
        }

        throw new \RuntimeException("not able to create universe ", $universe);
	}
} 