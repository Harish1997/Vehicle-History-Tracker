<?php
use App\Controllers\ServiceEngineerController;
$app->post('/vhs/service/engineer',function($request,$response,$args){
	$engineer=new ServiceEngineerController($request);
	$result = $engineer->addEngineer();
	$response=$response->withJson($result);
	return $response;
});
