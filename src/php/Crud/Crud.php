<?php

namespace Crud;

use Database\MySQL\Db;

class Crud {

	protected $db;

	public function __construct(Db $db) {
		$this->db = $db;

	}
} 