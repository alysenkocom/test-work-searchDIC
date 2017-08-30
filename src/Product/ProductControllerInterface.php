<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product;

/**
 * Interface ProductControllerInterface
 *
 * @package TestWork\src\Product
 */
interface ProductControllerInterface
{

	/**
	 * @param array $filter
	 *
	 * @return array
	 */
	public function getProductsByFilter(array $filter);

	/**
	 * @return array
	 */
	public function getLastProducts();
}