<?php
use App\Api\Dbconnect;
$app->post('/vhs/vehicle',function($request,$response,$args){
	$vehicle=new VehicleController($request);
	$result = $vehicle->addVehicle();
	$response=$response->withJson($result);
	
	return $response;
});
