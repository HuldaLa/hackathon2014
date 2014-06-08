<?php

namespace Crud;

use \Database\MySQL\MysqliDb;

class Crud {

	protected $db;

	public function __construct(MysqliDb $db = NULL) {
		if (is_null($db)) {
			$db = MysqliDb::getInstance();
		}

		$this->db = $db;
	}
} 