<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Search;

/**
 * Interface SearchControllerInterface
 *
 * @package TestWork\src\Search
 */
interface SearchControllerInterface
{

	/**
	 * @return array
	 */
	public function filterSearchData();

	/**
	 * @param array $searchData
	 *
	 * @return array|null
	 */
	public function searchByFields(array $searchData);

}