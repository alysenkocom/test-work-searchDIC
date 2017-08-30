<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Search;

use Symfony\Component\HttpFoundation\Request;
use TestWork\src\Product\ProductControllerInterface;
use TestWork\src\Product\Size\SizeControllerInterface;

/**
 * Class SearchController
 *
 * @package TestWork\src\Search
 */
class SearchController implements SearchControllerInterface {

	/**
	 * @var Request
	 */
	public $httpFoundation;

	/**
	 * @var ProductControllerInterface
	 */
	public $productController;

	/**
	 * @var SizeControllerInterface
	 */
	public $sizeController;

	/**
	 * SearchController constructor.
	 *
	 * @param Request 						$httpFoundation
	 * @param ProductControllerInterface 	$productController
	 * @param SizeControllerInterface 		$sizeController
	 */
	public function __construct(
		Request $httpFoundation,
		ProductControllerInterface $productController,
		SizeControllerInterface $sizeController
	) {
		$this->httpFoundation = $httpFoundation;
		$this->productController = $productController;
		$this->sizeController = $sizeController;
	}

	/**
	 * @return array
	 */
	public function filterSearchData() {
		$searchData = [];

		$searchText = $this->httpFoundation->get('text');
		$searchBrand = $this->httpFoundation->get('brand');
		$searchSize = $this->httpFoundation->get('size');

		if (! is_null($searchText) && ! empty($searchText)) {
			$searchData['text'] = $searchText;
		}
		if (! is_null($searchBrand) && ! empty($searchBrand)) {
			$searchData['brand'] = intval($searchBrand);

			$sizeData = $this->sizeController->getSizesByBrandId($searchBrand);
			if (! empty($sizeData)) {
				$searchData['size'] = [ 'data' => $sizeData ];
			}
		}
		if (! is_null($searchSize) && ! empty($searchSize)) {
			$searchSize = intval($searchSize);
			$sizeData = $this->sizeController->getSizesByBrandId($searchBrand);
			if (! empty($sizeData)) {
				$searchData['size'] = [
					'selected' => $searchSize,
					'data' => $sizeData
				];
			}
		}

		return $searchData;
	}

	/**
	 * @param array $searchData
	 *
	 * @return array|null
	 */
	public function searchByFields(array $searchData) {
		$productsObjects = null;

		if (! empty($searchData)) {
			$productsObjects = $this->productController->getProductsByFilter($searchData);
		}

		return $productsObjects;
	}

}