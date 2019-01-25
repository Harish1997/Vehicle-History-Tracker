<?php
namespace App\Api;
class Dbconnect{
private $host;
private $user;
private $pass;
private $db_name;
public $mysqli;
public function __construct(){
	$this->host="localhost";
	$this->user="root";
	$this->pass="password";
	$this->db_name="vhs";

	$this->mysqli=new \mysqli($this->host,$this->user,$this->pass,$this->db_name);
	if($this->mysqli->connect_error){
		//echo "Failed to connect<br>";
	}
	else{
		//echo "DB connected";
	}   
}
	public function query($sql){
		$result=$this->mysqli->query($sql);
		
		return $result;

	}
}
?>