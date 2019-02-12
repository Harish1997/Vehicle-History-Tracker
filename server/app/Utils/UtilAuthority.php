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
                 $response['response']=1;
                 $response['message']="New record created successfully";
                 return $response;
			} 
			else {
    			return "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		catch(Exception $e){
            $response['response']=1;
            $response['message']=$e;
            return $response;		}
	}
    function select($email){
        $sql= "select password from authority where email = '".$email."'";
        $result=NULL;
        try{
            $result=$this->conn->query($sql);
            if ($result==FALSE) {
                throw new \Exception($sql) ;
            } 
        }
        catch(Exception $e){
            $response['response']=0;
            $response['message']=$e;
            return $response;
        }

        $result=$result->fetch_assoc();
        return $result;
    }
}
?>