<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Brand\DataManager;

/**
 * Interface MySQLInterface
 *
 * @package TestWork\src\Product\Brand\DataManager
 */
interface MySQLInterface
{
	/**
	 * @return array
	 */
	public function getBrands();
}