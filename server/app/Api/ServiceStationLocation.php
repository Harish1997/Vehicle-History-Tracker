<?php
use App\Controllers\ServiceStationLocationController;
$app->post('/vhs/service/location',function($request,$response,$args){
	$manufacturer=new ServiceStationLocationController($request);
	$result = $manufacturer->addServiceStationLocation();
	$response=$response->withJson($result);
	return $response;
});
?>