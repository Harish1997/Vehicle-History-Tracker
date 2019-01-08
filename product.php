<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Product{
   public $product_name,$description,$status;
   public $con;
   public $insert_id;
    function __construct(){
        $servername="localhost";
        $username="root";
        $password="password";
        $dbname="test_oops";

        $this->con=new mysqli($servername,$username,$password,$dbname);

        if($this->con->connect_error){
                die("Connection faled ". $this->con->connect_error);
        }
    }

    function insert($pname,$desc,$stat){
        $this->product_name=$pname;
        $this->description=$desc;
        $this->status=$stat;

        $sql = "INSERT INTO PRODUCT (name,description,status,created_date) VALUES ('$this->product_name','$this->description','$this->status',NOW());";   
        if ($this->con->query($sql) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("Product successfully added")';
            echo '</script>';
            $insert_id = $this->con->insert_id;
            echo $insert_id."<br>";

        }        

    }

    function update($pid,$pname,$pdesc,$pstatus){
        $sql="UPDATE PRODUCT SET name='$pname',description='$pdesc',status='$pstatus' where id =$pid";

        if ($this->con->query($sql) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("product successfully updated")';
            echo '</script>';
            

        }       
    }

    function delete($id){
        $sql="DELETE FROM PRODUCT WHERE id='$id'";
        if ($this->con->query($sql) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("product successfully deleted")';
            echo '</script>';

        }       

    }

    function display(){
        $sql= "SELECT * FROM PRODUCT";
        $result = mysqli_query($this->con, $sql); // First parameter is just return of "mysqli_connect()" function
        echo "<br>";
        echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "</tr>";
}
echo "</table>";

    }

}
if(isset($_POST['type'])){
$prod=new Product();
if($_POST['type']=="add"){
$prod->insert($_POST['pname'],$_POST['desc'],$_POST['status']);
}
else if($_POST['type']=="update"){
$prod->update($_POST['id'],$_POST['pname'],$_POST['desc'],$_POST['status']);
}
else if($_POST['type']=="delete"){
$prod->delete($_POST['id']);
}
else{
    $prod->display();
}
}
?>