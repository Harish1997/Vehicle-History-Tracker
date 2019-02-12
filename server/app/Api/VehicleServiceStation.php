<?php
use App\Controllers\ServiceStationController;
$app->post('/vhs/service/station',function($request,$response,$args){
	$service_station=new ServiceStationController($request);
	$result = $service_station->addServiceStation();
	$response=$response->withJson($result);
	return $response;
});
