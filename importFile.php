<?php

include 'db_con.php';

if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $id = $csv[0];
  $email = $csv[1];
  $password = $csv[2];
  mysql_query("INSERT INTO employee (id,email,password)VALUES('".$id."','".$email."','".$password."')");
 }
}
?>