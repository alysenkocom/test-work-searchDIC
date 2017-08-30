<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\DataManager;

use TestWork\src\DataManager\DataManager;


/**
 * Class MySQL
 *
 * @package TestWork\src\Product\DataManager
 */
class MySQL extends DataManager implements MySQLInterface {

	/**
	 * @var \TestWork\src\Product\Size\DataManager\MySQLInterface
	 */
	public $sizeDataManager;

	/**
	 * MySQL constructor.
	 *
	 * @param \TestWork\src\Product\Size\DataManager\MySQLInterface $sizeDataManager
	 */
	public function __construct(\TestWork\src\Product\Size\DataManager\MySQLInterface $sizeDataManager) {
		parent::__construct();

		$this->sizeDataManager = $sizeDataManager;
	}

	/**
	 * @param array $searchData
	 *
	 * @return array
	 */
	public function getProductsByFilters(array $searchData) {
		$sqlSelect = '
			SELECT 
				`products`.name AS product_name, 
				`products`.img AS product_img, 
				`brands`.name AS brand_name, 
				(
					SELECT 
						GROUP_CONCAT(sizes.`name` SEPARATOR \', \') AS s 
					FROM `sizes` 
					INNER JOIN `sizes_to_products` AS stp ON stp.`size_id`=sizes.`id` 
					where stp.product_id=`products`.id
				) as size_name
			FROM `products` 
			INNER JOIN `brands` ON `brands`.id=`products`.brand_id 
			INNER JOIN `types` ON `types`.id=`products`.type_id
			INNER JOIN `search` ON `search`.product_id=`products`.id ';

		$havingData = '';
		if (! empty($searchData)) {
			$whereData = [];
			if (isset($searchData['brand'])) {
				$whereData[] = ' search.brand_id=' . $searchData['brand'] . ' ';
			}
			if (isset($searchData['text'])) {
				$textData = explode(' ',$searchData['text']);
				foreach ($textData as $word) {
					$whereData[] = ' search.product_data like "%' . $this->dataManager->escape_string($word) . '%" ';
				}
			}
			if (isset($searchData['size']) && isset($searchData['size']['selected'])) {
				$havingData = ' having `size_name` like "%' . $this->sizeDataManager->getSizeNameById($searchData['size']['selected']) . '%" ';
			}
			if (! empty($whereData)) {
				$sqlSelect .= ' where ' . implode(' AND ', $whereData);
			}
		}
		$sqlSelect .= $havingData . ' order by `products`.`id` desc limit 6';

		$result = $this->select($sqlSelect);

		return $result;
	}

	/**
	 * @return array
	 */
	public function getLastProducts() {
		$sqlSelect = '
			SELECT 
				`products`.name AS product_name, 
				`products`.img AS product_img, 
				`brands`.name AS brand_name, 
				(
					SELECT 
						GROUP_CONCAT(sizes.`name` SEPARATOR \', \') AS s 
					FROM `sizes` 
					INNER JOIN `sizes_to_products` AS stp ON stp.`size_id`=sizes.`id` 
					where stp.product_id=`products`.id
				) as size_name
			FROM `products` 
			INNER JOIN `brands` ON `brands`.id=`products`.brand_id 
			INNER JOIN `types` ON `types`.id=`products`.type_id
			INNER JOIN `search` ON `search`.product_id=`products`.id 
			ORDER BY `products`.`id` 
			DESC LIMIT 10';

		return $this->select($sqlSelect);
	}

}