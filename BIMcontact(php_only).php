<?php

$array = array('firstname' => "" , 'name' => "" , 'email' => "" ,'phone' => "" , 'message' => "");
$emailtext="";
$emailto="diamioniaoui@gmail.com";
$issucces=FALSE;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["firstname"]= verifyinput($_POST["firstname"]);
    $array["name"]= verifyinput($_POST["name"]);
    $array["Email"]= verifyinput($_POST["Email"]);
    $array["phone"]= verifyinput($_POST["phone"]);
    $array["Message"] = verifyinput($_POST["Message"]);
    $issucces=TRUE;
    $text="";
    
    // if (!empty($firstname)&&!empty($name)&&!empty($phone)&&!empty($Message)&&!empty($Email)) {
    //   $issucces= TRUE; 
    // }

    if ($issucces) {
      $text .="firstname $array["firstname"] \n name $array["name"]  \n  Email $array["Email"] \n phone  $array["phone"] \n message  $array["message"] \n" ;
      $header="from $firstname";
      mail("diaminiaoui@gmail.com","un message de votre site",$text,$header);
      $array["firstname"]=$array["name"]=$array["Email"]=$array["phone"]=$array["message"]=""; 
      
    }


 }
 
 function verifyinput($var){
   $var = trim($var);
   $var = stripslashes($var);
   $var = htmlspecialchars($var);
   return $var;
 }      



 echo htmlspecialchars($_SERVER['PHP_SELF']); 



?>
