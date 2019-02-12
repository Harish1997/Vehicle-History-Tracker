<?php
use App\Controllers\AuthoritySignupController;
$app->post('/vhs/signup',function($request,$response,$args){
	$signup=new AuthoritySignupController($request);
	$result = $signup->addUser();
	$response=$response->withJson($result);
	return $response;
});
