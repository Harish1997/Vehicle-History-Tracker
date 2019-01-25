<?php
use App\Api\Dbconnect;
$app->get('/vhs/vehicle/view/{id}',function($request,$response,$args){
	$key=$args['id'];
	//require_once('dbconnect.php');
	//echo $key;
	//echo "<br><center><h1>Welcome to Vehicle History Tracker</h1></center><br><br><br>";
	$query = "select * from vehicle,manufacturer where vin='".$key."'" ;
	$mysqli=new Dbconnect();
	$result=$mysqli->query($query);
	
	$response=$response->withJson($result);
	
	return $response;
});
