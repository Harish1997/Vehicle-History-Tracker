<?php

namespace App\Utils;

use app\Api\Dbconnect;

class UtilFetchAllByVin{
public $conn;
	function __construct(){
		$this->conn=new Dbconnect();
	}

function select($vin){
        $sql= "select * from vehicle join registration on vehicle.vin=registration.vin where  = '".$email."'";
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