<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Brand\DataManager;

use TestWork\src\DataManager\DataManager;

/**
 * Class MySQL
 *
 * @package TestWork\src\Product\Brand\DataManager
 */
class MySQL extends DataManager implements MySQLInterface
{

	/**
	 * @return array
	 */
	public function getBrands() {
		$sqlSelect = 'SELECT * FROM `brands`';

		return $this->select($sqlSelect);
	}

}