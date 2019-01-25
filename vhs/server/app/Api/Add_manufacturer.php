<?php
use App\Controllers\ManufacturerController;
$app->post('/vhs/manufacturer',function($request,$response,$args){
	$manufacturer=new ManufacturerController($request);
	$result = $manufacturer->addManufacturer();
	$response=$response->withJson($result);
	return $response;
});
?>