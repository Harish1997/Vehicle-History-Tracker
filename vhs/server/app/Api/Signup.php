<?php
use App\Controllers\SignupController;
$app->post('/vhs/signup',function($request,$response,$args){
	$signup=new SignupController($request);
	$result = $signup->addUser();
	$response=$response->withJson($result);
	return $response;
});
