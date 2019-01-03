<html>
<?php
oddeven();
strings();
loops();
strconversion();
addition(5,6);
carbrands();

function  oddeven(){
      $x=6;
      if($x%2==0){
          echo "It is an even number<br>";
      }
      else{
          echo "Its an odd number<br>";
      }
}
function strings(){
$str = "I am learning php!";
echo "$str <br>";
echo "The number of words are ".str_word_count($str)."<br>";
echo "String replace ".str_replace("php","Java",$str)."<br>";
}
function loops(){
$z=6;
for($x=0;$x<5;$x++){
    echo $x;
    echo "<br>";
}
echo "<br>";
echo "<br>";

while($z!=0){
    echo $z;
    echo "<br>";
    $z--; 
}

echo "<br>";
echo "<br>";

do{
echo $z;
$z++;
echo "<br>";
}while($z!=6);
echo "<br>";
echo "<br>";

}

function strconversion(){
    $x = 17.66;
    echo $x."";
}

function addition($a,$b){
    echo $a+$b;
    echo "<br>";
}

function carbrands(){

    $cars=array("BMW","AUDI","HONDA","FIAT");
    echo "Printing elements in car array<br>";
    foreach($cars as $car){
        echo $car;
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";

    echo "Replacing $cars[3] with Maruti <br>";
    $cars[3]="Maruti";
    
    echo "<br>";
    echo "<br>";

    echo "Printing elements in car array<br>";
    foreach($cars as $car){
        echo $car;
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";


    echo "Reversing the cars array<br>";

    $cars = array_reverse($cars);

    echo "<br>";
    echo "<br>";

    echo "Printing elements in car array after reversing<br>";
    foreach($cars as $car){
        echo $car;
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    echo "Printing an element in the array $cars[2]";
}
?>
</html>