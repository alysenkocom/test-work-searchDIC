<?php
/**
 * Created by PhpStorm.
 * User: alysenko
 */

require_once __DIR__ . '/vendor/autoload.php';

$DIC = new \TestWork\src\DIC();
$httpFoundation = $DIC->getHttpFoundation();

$ajax = $httpFoundation->get('ajax');

if (! is_null($ajax) && ! empty($ajax)) {

	/** size by brandId */
	$brandId = $httpFoundation->get('brandId');
	if (! is_null($ajax) && ! empty($ajax)) {
		$sizeController = $DIC->getSizeController();

		$brandId = intval($brandId);
		$dbResult = $sizeController->getSizesByBrandId($brandId);
		if (!empty($dbResult)) {
			$result['error'] = false;
			$result['result'] = $dbResult;
		}
	}

	//

	//

	echo json_encode($result);
	exit;
}
