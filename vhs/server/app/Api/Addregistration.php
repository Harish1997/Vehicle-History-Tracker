<?php
use App\Api\Dbconnect;
$app->post('/vhs/registration',function($request,$response,$args){
	$registered_vehicle=new RegistrationController($request);
	$result = $registered_vehicle.registerVehicle();
	$response=$response->withJson($result);
	
	return $response;
});
