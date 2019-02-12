<?php
require_once("AuthorityLogin.php");
require_once("AuthoritySignUp.php");
require_once("VehicleManufacturer.php");
require_once("VehicleModel.php");
require_once("VehicleRegistration.php");
require_once("VehicleCore.php");


//Insurance Routes
require_once("InsuranceCompany.php");
require_once("VehicleInsuranceClaim.php");
require_once("VehicleInsurance.php");

//Legal case Routes
require_once("PoliceStation.php");
require_once("VehicleCriminalCase.php");

//Service routes
require_once("WorkstationServiceEngineer.php");
//yet to be tested
require_once("VehicleServiceStation.php");
require_once("ServiceStationLocation.php");
require_once("VehicleServiceHistory.php");
?>