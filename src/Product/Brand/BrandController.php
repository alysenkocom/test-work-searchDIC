<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Brand;

use TestWork\src\Product\Brand\DataManager\MySQL;

/**
 * Class BrandController
 *
 * @package TestWork\src\Product\Brand
 */
class BrandController implements BrandControllerInterface
{
	/**
	 * @var MySQL
	 */
	public $dataManager;

	/**
	 * BrandController constructor.
	 *
	 * @param MySQL $dataManager
	 */
	public function __construct(MySQL $dataManager) {
		$this->dataManager = $dataManager;
	}

	/**
	 * @return array
	 */
	public function getBrands () {
		return $this->dataManager->getBrands();
	}

}