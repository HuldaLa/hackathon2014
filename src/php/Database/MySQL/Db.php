<?php
namespace Database\MySQL;

class Db
{
	const DATE_TIME_FORMAT = 'Y-m-d H:i:s';
	/**
	 * @var \mysqli
	 */
	private $con;
	public function __construct()
	{
	}

	public function connect($username, $pwd, $dbname, $host = 'localhost')
	{
		$this->con = new \mysqli($host, $username, $pwd, $dbname);
		if ($this->con->connect_errno) {
			throw new MySQLConnectException($this->con->connect_error, $this->con->connect_errno);
		}

	}

	/**
	 * Will return bool if INSERT or UPDATE were successful
	 * Will return DbResult if SELECT was successful
	 *
	 * @param $query
	 * @return bool|DbResult
	 */
	public function query($query)
	{
		$args = func_get_args();
		if (1 != count($args)) {
			$query = call_user_func_array(array($this, 'format'), $args);
		}
		$result =  $this->con->query($query);
		if (is_bool($result)) {
			return $result;
		}

		return new DbResult($result);
	}

	public function format($query)
	{
		$args = func_get_args();
		unset($args[0]);

		foreach ($args as $arg) {
			//@todo
		}
		$query = vsprintf($query, $args);
		return $query;
	}

	public function getLastInsertId() {
		return $this->con->insert_id;
	}

	public function getLastError() {
		return $this->con->error;
	}

	public function getLastErrorCode() {
		return $this->con->errno;
	}
}

class MySQLConnectException extends \RuntimeException {

}
