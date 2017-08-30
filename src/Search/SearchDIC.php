<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Search;

/**
 * Trait SearchDIC
 *
 * @package TestWork\src\Search
 */
trait SearchDIC
{

	/**
	 * @var SearchController
	 */
	public $searchController;

	/**
	 * @return SearchController
	 */
	public function getSearchController() {
		if (null === $this->searchController) {
			$this->searchController = new SearchController(
				$this->getHttpFoundation(),
				$this->getProductController(),
				$this->getSizeController()
			);
		}

		return $this->searchController;
	}

}