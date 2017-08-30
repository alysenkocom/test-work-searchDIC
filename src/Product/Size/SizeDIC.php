<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Product\Size;

use TestWork\src\Product\Size\DataManager\MySQL;

/**
 * Trait SizeDIC
 *
 * @package TestWork\src\Product\Size
 */
trait SizeDIC
{

	/**
	 * @var SizeController
	 */
	private $sizeController;

	/**
	 * @var MySQL
	 */
	private $sizeDataManager;

	/**
	 * @return SizeController
	 */
	public function getSizeController() {
		if (null === $this->sizeController) {
			$this->sizeController = new SizeController(
				$this->getSizeDataManager ()
			);
		}

		return $this->sizeController;
	}

	/**
	 * @return MySQL
	 */
	public function getSizeDataManager() {
		if (null === $this->sizeDataManager) {
			$this->sizeDataManager = new MySQL();
		}

		return $this->sizeDataManager;
	}

}