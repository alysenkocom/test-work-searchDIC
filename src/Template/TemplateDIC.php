<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\Template;

/**
 * Trait TemplateDIC
 *
 * @package TestWork\src\Template
 */
trait TemplateDIC
{
	/**
	 * @var \Smarty
	 */
	private $smartyTemplateController;

	/**
	 * @return \Smarty
	 */
	public function getSmartyTemplateController() {
		if (null === $this->smartyTemplateController) {
			$this->smartyTemplateController = new \Smarty();
		}

		return $this->smartyTemplateController;
	}

	/**
	 * @return \Exception
	 */
	public function getTwigTemplateController() {
		return new \Exception('not implement yet');
	}

}