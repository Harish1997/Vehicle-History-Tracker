<?php
namespace App\Utils;

use App\Api\Dbconnect;

class UtilManufacturer{
 	public $conn;
	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($m_name){
		$sql = "insert into manufacturer(manufacturer_name) values('".$m_name."');";

		try{
			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}catch(Exception $e){
			Console.log($e);
		}
	}
}
?>