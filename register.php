<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$target_dir = "uploads/";
//echo var_dump($_FILES);
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
         //   echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }




class Register{
   public $firstname,$lastname,$ppic,$gender,$email,$status,$password,$cpassword;
   public $con;
    function __construct($fname,$lname,$gender,$mail,$pass,$stat,$target_file){
        $servername="localhost";
        $username="root";
        $password="password";
        $dbname="test_oops";

        $this->con=new mysqli($servername,$username,$password,$dbname);

        if($this->con->connect_error){
                die("Connection faled ". $this->con->connect_error);
        }
        else{
            $this->firstname=$fname;
            $this->lastname=$lname;
            $this->gender=$gender;
            $this->email=$mail;
            $this->password=$pass;
            $this->ppic=$target_file;
            $this->status=$stat;
        }
    }

    function insert(){

        $sql = "INSERT INTO USER (firstname, lastname,profile_picture,gender,email,status,password)
VALUES ('$this->firstname','$this->lastname','$this->ppic','$this->gender','$this->email','$this->status','$this->password')";
         
         if ($this->con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->con->error;
        }

    }

}
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['status'])){
$reg=new Register($_POST['fname'],$_POST['lname'],$_POST['gender'],$_POST['email'],$_POST['pass'],$_POST['status'],$target_file);
echo "success<br>";
$reg->insert();
}
else{
    echo "error<br>";
}
?>