<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Size;

/**
 * Interface SizeControllerInterface
 *
 * @package TestWork\src\Product\Size
 */
interface SizeControllerInterface
{

	/**
	 * @param integer $brandId
	 *
	 * @return array
	 */
	public function getSizesByBrandId($brandId);

}