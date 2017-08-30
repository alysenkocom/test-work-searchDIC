<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\DataManager;

/**
 * Interface MySQLInterface
 *
 * @package TestWork\src\Product\DataManager
 */
interface MySQLInterface
{

	/**
	 * @param array $searchData
	 *
	 * @return array
	 */
	public function getProductsByFilters(array $searchData);

	/**
	 * @return array
	 */
	public function getLastProducts();

}