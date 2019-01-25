<?php
use App\Api\Dbconnect;
$app->post('/vhs/login',function($request,$response,$args){
	$login=new LoginController($request);
	$result = $login.authenticateUser();
	$response=$response->withJson($result);
	
	return $response;
});
