<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product;

use TestWork\src\Product\Brand\BrandDIC;
use TestWork\src\Product\DataManager\MySQL;
use TestWork\src\Product\Size\SizeDIC;

/**
 * Trait ProductDIC
 *
 * @package TestWork\src\Product
 */
trait ProductDIC {
	use BrandDIC;
	use SizeDIC;

	/**
	 * @var ProductController
	 */
	private $productController;

	/**
	 * @var MySQL
	 */
	private $productDataManager;

	/**
	 * @return ProductController
	 */
	public function getProductController() {
		if (null === $this->productController) {
			$this->productController = new ProductController(
				$this->getProductDataManager()
			);
		}

		return $this->productController;
	}

	/**
	 * @return MySQL
	 */
	public function getProductDataManager() {
		if (null === $this->productDataManager) {
			$this->productDataManager = new MySQL(
				$this->getSizeDataManager()
			);
		}

		return $this->productDataManager;
	}

}