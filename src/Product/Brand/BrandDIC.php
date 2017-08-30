<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Brand;

use TestWork\src\Product\Brand\DataManager\MySQL;

/**
 * Trait BrandDIC
 *
 * @package TestWork\src\Product\Brand
 */
trait BrandDIC
{

	/**
	 * @var BrandController
	 */
	private $brandController;

	/**
	 * @var MySQL
	 */
	private $brandDataManager;

	/**
	 * @return BrandController
	 */
	public function getBrandController() {
		if (null === $this->brandController) {
			$this->brandController = new BrandController(
				$this->getBrandDataManager()
			);
		}

		return $this->brandController;
	}

	/**
	 * @return MySQL
	 */
	public function getBrandDataManager() {
		if (null === $this->brandDataManager) {
			$this->brandDataManager = new MySQL();
		}

		return $this->brandDataManager;
	}

}