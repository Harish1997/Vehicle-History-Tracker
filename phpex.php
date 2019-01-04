<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

asort($ceu);
foreach($ceu as $country=>$city){
    print "The capital of $country is $city";
    echo "<br><br>";
}

$string = 'AUDI';
$reverse = '';
$i = 0;
while(!empty($string[$i])){ 
      $reverse = $string[$i].$reverse; 
      $i++;
}
echo $reverse;

echo "<br>";
echo "<br>";

$original = array( 'a', 'b', 'c', 'd', 'e' );
$inserted = array( 'x' ); // not necessarily an array, see manual quote

array_splice( $original, 3, 0, $inserted );

for($i=0;$i<count($original);$i++){
    echo $original[$i];
}



//longest and smallest element
$largest=0;
$val="nil";
$smallest=10000;
$vas="nikkl";


$arr=array("zilker","tech","de","pvt","g","wer");

foreach($arr as $value){
    if(strlen($value)>$largest){
        $val=$value;
        $largest=strlen($val);
    }
    else if(strlen($value)<$smallest){
        $vas=$value;
        $smallest=strlen($vas);
    }
    else{
        continue;
    }
}
echo "<br>";
echo "<br>";
echo "Largest is $val whose length is $largest and smallest is $vas whose length is $smallest";



  //  i. Find position of "company" from string "This is my company."
  // ii. Make first character capital of this string "i love my country"
  // iii. Make first character capital of all words in this string "i love my country"
  // iv. check if string contain "boy" word from "I am boy, and 29 year old"

  $str="This is my company";
  echo "<br>";

  $pos=strpos($str,"company");

  echo $pos;
  echo "<br>";

  $str2="i love my country";
  $str2=ucfirst($str2);
  echo $str2;

  echo "<br>";

  $str2=ucwords($str2);
  echo $str2;

  echo "<br>";


  $str3="I am boy, and 29 year old";
  $pos=strpos($str3,"boy");
  if ($pos === false) {
    echo "The string was not found in the string '$str3'";
    echo "<br>";
} else {
    echo "The string was found in the string '$str3'";
    echo " and exists at position $pos";
    echo "<br>";

}


?>