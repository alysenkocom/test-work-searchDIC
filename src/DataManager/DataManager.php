<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\DataManager;

/**
 * Class DataManager
 *
 * @package TestWork\src\DataManager
 */
class DataManager
{
	/**
	 * @var \mysqli
	 */
	public $dataManager;

	/**
	 * DataManager constructor.
	 */
	public function __construct() {
		$this->dataManager = new \mysqli(
			'localhost',
			'root',
			'',
			'testdb'
		);
		$this->dataManager->set_charset('utf8');
	}

	/**
	 * @param string $sql
	 *
	 * @return array
	 */
	public function select($sql) {
		$return = [];
		$result = $this->dataManager->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$return[] = $row;
			}
		}
		return $return;
	}

}