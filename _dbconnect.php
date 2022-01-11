<?php
$server =  "localhost";//"sql304.epizy.com";
$username = "root";//"epiz_28625379";
$password = "";//"d4SBoIvztNQg2";
$database = "epiz_28625379_users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
   //  echo "success";
 // }
  //  else{
      die("Error". mysqli_connect_error());
}

?>
