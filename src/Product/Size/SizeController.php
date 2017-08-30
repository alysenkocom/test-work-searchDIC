<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Size;

use TestWork\src\Product\Size\DataManager\MySQLInterface;

/**
 * Class SizeController
 *
 * @package TestWork\src\Product\Size
 */
class SizeController implements SizeControllerInterface
{
	/**
	 * @var MySQLInterface
	 */
	public $dataManager;

	/**
	 * SizeController constructor.
	 *
	 * @param MySQLInterface $dataManager
	 */
	public function __construct(MySQLInterface $dataManager) {
		$this->dataManager = $dataManager;
	}

	/**
	 * @param integer $brandId
	 *
	 * @return array
	 */
	public function getSizesByBrandId($brandId) {
		return $this->dataManager->getSizesByBrandId($brandId);
	}

}