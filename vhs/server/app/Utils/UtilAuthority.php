<?php
namespace App\Utils;

use App\Api\Dbconnect;

class UtilAuthority{
	public $conn;
	function __construct(){
		$this->conn=new Dbconnect();
	}
	function insert($email,$pass,$contact,$f_name,$l_name,$org_type,$org_name){
		
	$sql = "insert into authority(email,password,contact,first_name,last_name,organization_type,organization_name) values('".$email."','".$pass."','".$contact."','".$f_name."','".$l_name."','".$org_type."','".$org_name."');";
    
		try{
			if ($this->conn->query($sql) === TRUE) {
    			return "New record created successfully";
			} 
			else {
    			return "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		catch(Exception $e){
			Console.log($e);
		}
	}
}
?>