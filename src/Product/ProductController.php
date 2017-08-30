<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product;

use TestWork\src\Product\DataManager\MySQLInterface;

/**
 * Class ProductController
 * @package TestWork\src\Product
 */
class ProductController implements ProductControllerInterface {

	/**
	 * @var MySQLInterface
	 */
	public $dataManager;

	/**
	 * ProductController constructor.
	 * @param MySQLInterface $dataManager
	 */
	public function __construct(MySQLInterface $dataManager) {
		$this->dataManager = $dataManager;
	}

	/**
	 * @param array $filter
	 *
	 * @return array
	 */
	public function getProductsByFilter(array $filter) {
		return $this->dataManager->getProductsByFilters($filter);
	}

	/**
	 * @return array
	 */
	public function getLastProducts() {
		return $this->dataManager->getLastProducts();
	}


}