<?php
use App\Controllers\ClaimController;
$app->post('/vhs/insurance/claim',function($request,$response,$args){
	$claim=new ClaimController($request);
	$result = $claim->addClaim();
	$response=$response->withJson($result);
	return $response;
});
