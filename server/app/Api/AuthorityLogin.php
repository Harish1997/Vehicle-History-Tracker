<?php
use App\Controllers\AuthorityLoginController;
$app->post('/vhs/login',function($request,$response,$args){
	 $login=new AuthorityLoginController($request);
	 $result = $login->userLogin();
	 $response=$response->withJson($result);
	 return $response;
});
