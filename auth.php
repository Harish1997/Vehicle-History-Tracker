<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Authentication{
   public $usermail,$password;
   public $con;
    function __construct($umail,$pass){
        $servername="localhost";
        $username="root";
        $password="password";
        $dbname="test_oops";

        $this->con=new mysqli($servername,$username,$password,$dbname);

        if($this->con->connect_error){
                die("Connection faled ". $this->con->connect_error);
        }
        else{
            $this->usermail=$umail;
            $this->password=$pass;
        
        }
    }

    function validate(){

        $sql = "SELECT  password FROM USER WHERE email='$this->usermail';";   
        $result=mysqli_query($this->con,$sql);      
           //echo $sql;
            if($result){
                if(mysqli_fetch_assoc($result)['password']==$this->password){
                     echo "Authentication success<br><br>";

                     $sql = "SELECT * from USER where email = '$this->usermail';";

                     $res=mysqli_query($this->con,$sql);
                     //echo $sql;
                     if($res){
                         $res=mysqli_fetch_assoc($res);
                         echo "<br>First Name:".$res['firstname'];
                         echo "<br>Last Name".$res['lastname'];
                         echo "<br>Profile picture: <img src='".$res["profile_picture"]."'/>";
                         echo "<br>Gender:".$res['gender'];
                         echo "<br>Email:".$res['email'];
                         echo "<br>Status:".$res['status'];

                         echo "<br><br><a href ='loginscreen.html'><button>Logout</button></a>";

                     }
                }
                else{
                    echo "Invalid credentials<br><br>";
                }
            }
            else{
                echo "Invalid credentials<br><br>";
            }

    }

}
if(isset($_POST['email']) && isset($_POST['pass'])){
$auth=new Authentication($_POST['email'],$_POST['pass']);
//echo "constructor success<br>";
$auth->validate();
}
else{
    echo "error<br>";
}
?>