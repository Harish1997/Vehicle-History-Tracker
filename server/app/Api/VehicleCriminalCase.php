<?php
use App\Controllers\CriminalRecordController;
$app->post('/vhs/criminal/record',function($request,$response,$args){
	$crime=new CriminalRecordController($request);
	$result = $crime->addCriminalRecord();
	$response=$response->withJson($result);
	return $response;
});
