<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src\HttpFoundation;

use Symfony\Component\HttpFoundation\Request;

/**
 * Trait HttpFoundationDIC
 * @package TestWork\src\HttpFoundation
 */
trait HttpFoundationDIC
{

	/**
	 * @var Request
	 */
	private $httpFoundation;

	/**
	 * @return Request|static
	 */
	public function getHttpFoundation() {
		if (null === $this->httpFoundation) {
			$this->httpFoundation = Request::createFromGlobals();
		}

		return $this->httpFoundation;
	}

}