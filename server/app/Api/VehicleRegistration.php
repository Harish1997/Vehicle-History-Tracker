<?php
use App\Controllers\RegistrationController;
$app->post('/vhs/registration',function($request,$response,$args){
	$registration=new RegistrationController($request);
	$result = $registration->addRegistration();
	$response=$response->withJson($result);
	return $response;
});
