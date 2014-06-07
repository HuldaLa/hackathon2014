<?php
namespace Database\MySQL;

class DbResult
{
	/**
	 * @var \mysqli_result
	 */
	private $result;
	private $lastInsertId;

	public function __construct(\mysqli_result $result) {
		$this->result = $result;
	}

	public function getLastInsertId() {
		return $this->lastInsertId;
	}

    public function fetchAssoc() {
        return $this->result->fetch_assoc();
    }

    public function fetchAssocs() {
        $assocs = array();
		while ($assoc = $this->result->fetch_assoc()) {
			$assocs[] = $assoc;
		}

		return $assocs;
    }
}
