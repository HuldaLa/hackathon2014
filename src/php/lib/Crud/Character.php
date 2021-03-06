<?php

namespace Crud;

class Character extends Crud {

	/**
	 * @param \Entities\Character $char
	 * @throws \RuntimeException
	 * @todo transaction
	 */
	public function create(\Entities\Character $char) {
        $data = Array("name" => $char->getName());
        $id = $this->db->insert('characters', $data);


        if ($id) {
            $char->setId($id);
            return $char;
        }

        throw new \RuntimeException("not able to create character ", $char);
	}

    public function getAll() {
        $characters = $this->db->get('characters');
        if (isset($characters)) {
            return $characters;
        }
        throw new \RuntimeException("not able to read characters.");
    }

	/**
	 * @param $id
	 * @return array
	 * @throws \RuntimeException
	 */
	public function getById($id) {
        $this->db->where ("id", $id);
        $character = $this->db->getOne ("characters");
        if (isset($character)) {
            return $character;
        }

        throw new \RuntimeException("not able to read character.", $id);
	}
} 