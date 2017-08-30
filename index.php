<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

require_once __DIR__ . '/vendor/autoload.php';

$DIC = new \TestWork\src\DIC();

$searchController = $DIC->getSearchController();
$productController = $DIC->getProductController();
$brandController = $DIC->getBrandController();
$smartyTemplate = $DIC->getSmartyTemplateController();


$brands = $brandController->getBrands();
$searchData = $searchController->filterSearchData();
$products = $searchController->searchByFields($searchData);

if (is_null($products)) {
	$products = $productController->getLastProducts();
}


$smartyTemplate->assign('searchData', $searchData);
$smartyTemplate->assign('products', $products);
$smartyTemplate->assign('brands', $brands);

$smartyTemplate->display('templates/index.tpl');