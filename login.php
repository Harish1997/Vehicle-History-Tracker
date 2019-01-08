<?php
Interface login{
    public function authenticate();
}
class Google implements login{
    private $username="harish",$password="harishvignesh",$Firstname="Harish",$Lastname="Anantharaman";
    private $myuser,$mypass;
    function __construct($usern,$userp){
        $this->myuser=$usern;
        $this->mypass=$userp;
    }
    function authenticate(){
        if($this->username==$this->myuser && $this->password==$this->mypass){
            echo "Welcome $Firstname $Lastname, you have successfully signed into your Google account";
        }
        else{
            echo "Error signing into your google account";
        }
    }
}

class Facebook implements login{
    private $username="harish",$password="harishsvce",$Firstname="Harish",$Lastname="Anantharaman";
    private $myuser="",$mypass="";
    function __construct($usern,$userp){
        $this->myuser=$usern;
        $this->mypass=$userp;
    }
    function authenticate(){
        if($this->username==$this->myuser && $this->password==$this->mypass){
            echo "Welcome $Firstname $Lastname, you have successfully signed into your Facebook account";
        }
        else{
            echo "Error signing into your facebook account";
        }
    }
}

class Twitter implements login{
    private $username="harish",$password="harishzilker",$Firstname="Harish",$Lastname="Anantharaman";
    private $myuser="",$mypass="";
    function __construct($usern,$userp){
        $this->myuser=$usern;
        $this->mypass=$userp;
    }
    function authenticate(){
        if($this->username==$this->myuser && $this->password==$this->mypass){
            echo "Welcome $Firstname $Lastname, you have successfully signed into your Twitter account";
        }
        else{
            echo "Error signing into your twiiter account";
        }
    }
}



if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type'])){
    //echo $_POST['username'].$_POST['password'].$_POST['type'];
    if($_POST['type']=='google'){
         $gl=new Google($_POST['username'],$_POST['password']);
         $gl->authenticate();
    }
    else if($_POST['type']=="facebook"){
         $fb=new Facebook($_POST['username'],$_POST['password']);
         $fb->authenticate();
    }
    else{
         $tw = new Twitter($_POST['username'],$_POST['password']);
         $tw->authenticate();
    }
}
else{
    echo "error";
}
?>
