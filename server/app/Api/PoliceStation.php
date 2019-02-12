<?php
use App\Controllers\PoliceController;
$app->post('/vhs/police/station',function($request,$response,$args){
	$station=new PoliceController($request);
	$result = $station->addStation();
	$response=$response->withJson($result);
	return $response;
});
