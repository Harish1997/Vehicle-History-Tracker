<?php
use App\Controllers\ModelController;
$app->post('/vhs/model',function($request,$response,$args){
	$vehicle_model=new ModelController($request);
	$result = $vehicle_model->addModel();
	$response=$response->withJson($result);
	return $response;
});
