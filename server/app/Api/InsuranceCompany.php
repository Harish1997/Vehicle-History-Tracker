<?php
use App\Controllers\InsuranceCompanyController;
$app->post('/vhs/insurance/company',function($request,$response,$args){
	$company=new InsuranceCompanyController($request);
	$result = $company->addCompany();
	$response=$response->withJson($result);
	return $response;
});
