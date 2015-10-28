<?php
$data = json_decode(file_get_contents("php://input"));
$sex= mysql_real_escape_string($data->sex);
$fname= mysql_real_escape_string($data->fname);
$lname= mysql_real_escape_string($data->lname);
$city= mysql_real_escape_string($data->city);
$contact= mysql_real_escape_string($data->contact);


$con=mysql_connect("localhost", "root", "0000");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 
  
mysql_select_db("agency");
mysql_query("INSERT INTO customers(`Sex`,`FirstName`, `LastName`, `City`, `Mob`)VALUES('".$sex."', '".$fname."', '".$lname."', '".$city."', '".$contact."')"); 

?>