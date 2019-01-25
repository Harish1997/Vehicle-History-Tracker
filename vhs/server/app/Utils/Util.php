<?php
namespace App\Utils;
use app\Api\Dbconnect;
class Util{
	//for manufacturer
$Dbconnect conn;
	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert_manufacturer($m_id,$m_name){
		$sql = "insert into manufacturer(manufacturer_id, manufacturer_name) values('".$m_id."','".$m_name."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_model($m_id,$m_name,$y_o_p,$disp,$type){
		$sql = "insert into model(manufacturer_id, model_name,year_of_production,displacement,type) values('".$m_id."','".$m_name."','".$y_o_p."','".$disp."','".$type."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_authority($email,$pass,$contact,$f_name,$l_name,$org_type,$org_name){
	$sql = "insert into authority(email,password,contact,first_name,last_name,organization_type,organization_name) values('".$email."','".$pass."','".$contact."','".$f_name."','".$l_name."','".$org_type."','".$org_name."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_criminal_case($case_id,$case_date,$station_id,$case_type,$case_description){
			$sql = "insert into criminal_case(case_id, case_date,station_id,case_type,case_description) values('".$case_id."','".$case_date."','".$station_id."','".$case_type."','".$case_description."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_location($location_id,$country,$state,$city,$street,$number){
			$sql = "insert into location(location_id, country,state,city,street,number) values('".$location_id."','".$country."','".$state."','".$city."','".$street."','".$number."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_service_station($ws_id,$ws_name,$manufacturer_idm,$location_id,$manager_name,$ws_contact){
			$sql = "insert into service_station(ws_id, ws_name,manufacturer_id,location_id,manager_name,ws_contact) values('".$ws_id."','".$ws_name."','".$manufacturer_id."','".$location_id."','".$manager_name."','".$ws_contact."');";
			try{
			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}}
			catch(Exception $e){
				Console.log($e);
			}
	}
	function insert_service_engineers($ws_id,$service_engineer_id,$contact){
			$sql = "insert into service_engineer(ws_id, service_engineer_id,contact) values('".$ws_id."','".$service_engineer_id."','".$contact."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_police_station($station_id,$station_name,$inspector_name,$station_contact){
			$sql = "insert into station(station_id, station_name,inspector_name,station_contact) values('".$station_id."','".$station_name."','".$inspector_name."','".$station_contact."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}

	function registration($registration_id,$manufacturer_id,$model_name,$color,$registration_date,$rto_id){
			$sql = "insert into registration(registration_id, manufacturer_id,model_name,color,registration_date,rto_id) values('".$registration_id."','".$manufacturer_id."','".$model_name."','".$color."','".$registration_date."','".$rto_id."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}

	function insert_vehicle($vin,$manufacturer_id,$year_of_mfg,$model_name,$color){
			$sql = "insert into vehicle(vin, manufacturer_id,year_of_mfg,model_name,color) values('".$vin."','".$manufacturer_id."','".$year_of_mfg."','".$model_name."','".$color."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_insurance_companies(){
			$sql = "insert into insurance_companies(ic_id, ic_name,naic_code) values('".$ic_id."','".$ic_name."','".$naic_code."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}

	function insert_vehicle_claim($vin,$insurance_id,$claim_date,$claim_type,$description,$estimated_cost,$claim_status){
			$sql = "insert into vehicle_claim(vin, insurance_id,claim_date,claim_type,description,estimated_cost,claim_status) values('".$vin."','".$insurance_id."','".$claim_date."','".$claim_type."','".$description."','".$estimated_cost."','".$claim_status."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_vehicle_criminal($vin,$registration_id,$case_id){
			$sql = "insert into vehicle_criminal(vin, registration_id,case_id) values('".$vin."','".$registration_id."','".$case_id."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_vehicle_insurance($vin,$registration_id,$ic_id,$insurance_id,$insurance_type,$validity){
			$sql = "insert into vehicle_insurance(vin, registration_id,ic_id,insurance_id,insurance_type,validity) values('".$vin."','".$registration_id."','".$ic_id."','".$insurance_id."','".$insurance_type."','".$validity."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	function insert_vehicle_service($vin,$r_id,$s_date,$ws_id,$s_id,$s_desc,$s_eng_id){
			$sql = "insert into vehicle_service(vin, registration_id,service_date,ws_id,service_id,service_description,service_engineer_id) values('".$vin."','".$r_id."','".$s_date."','".$ws_id."','".$s_id."','".$s_desc."','".$s_eng_id."');";

			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}

	}
}
?>