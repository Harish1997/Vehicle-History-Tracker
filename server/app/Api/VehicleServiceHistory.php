<?php
use App\Controllers\VehicleServiceHistoryController;
$app->post('/vhs/vehicle/service',function($request,$response,$args){
	$vehicle_service_history=new VehicleServiceHistoryController($request);
	$result = $vehicle_service_history->addVehicleServiceHistory();
	$response=$response->withJson($result);
	return $response;
});
