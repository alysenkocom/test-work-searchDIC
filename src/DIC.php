<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

namespace TestWork\src;

use TestWork\src\HttpFoundation\HttpFoundationDIC;
use TestWork\src\Product\ProductDIC;
use TestWork\src\Search\SearchDIC;
use TestWork\src\Template\TemplateDIC;

/**
 * Class DIC
 *
 * @package TestWork\src
 */
class DIC
{
	use HttpFoundationDIC;
	use ProductDIC;
	use SearchDIC;
	use TemplateDIC;
}