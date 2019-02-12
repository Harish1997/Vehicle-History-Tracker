<?php
use App\Controllers\VehicleInsuranceController;
$app->post('/vhs/vehicle/insurance',function($request,$response,$args){
	$vehicle_insurance=new VehicleInsuranceController($request);
	$result = $vehicle_insurance->addVehicleInsurance();
	$response=$response->withJson($result);
	return $response;
});
