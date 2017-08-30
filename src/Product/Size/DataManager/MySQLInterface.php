<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Size\DataManager;

/**
 * Interface MySQLInterface
 *
 * @package TestWork\src\Product\Size\DataManager
 */
interface MySQLInterface
{

	/**
	 * @param integer $brandId
	 *
	 * @return array
	 */
	public function getSizesByBrandId($brandId);

	/**
	 * @param integer $sizeId
	 *
	 * @return string
	 */
	public function getSizeNameById($sizeId);

}