<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Size\DataManager;

use TestWork\src\DataManager\DataManager;

/**
 * Class MySQL
 * @package TestWork\src\Product\Size\DataManager
 */
class MySQL extends DataManager implements MySQLInterface
{

	/**
	 * @param integer $brandId
	 *
	 * @return array
	 */
	public function getSizesByBrandId($brandId) {
		$result = [];
		$brandId = intval($brandId);
		if ($brandId > 0) {
			$sqlSelect = '
				SELECT 
					`sizes`.*
				FROM `brands`
				INNER JOIN `sizes_to_brands` AS stb ON stb.`brands_id` = `brands`.`id`
				INNER JOIN `sizes` ON `sizes`.`id` = stb.`sizes_id`
				where `brands`.`id` = ' . $brandId;

			$result = $this->select($sqlSelect);
		}

		return $result;
	}

	/**
	 * @param integer $sizeId
	 *
	 * @return string
	 */
	public function getSizeNameById($sizeId) {
		$sqlSelect = 'SELECT * FROM `sizes` WHERE `id` = ' . $sizeId;
		$result = $this->select($sqlSelect);
		$result = reset ($result);

		return $result['name'];
	}

}