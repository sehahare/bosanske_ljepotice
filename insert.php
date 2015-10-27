<?php
$data = json_decode(file_get_contents("php://input"));
$fname= mysql_real_escape_string($data->fname);
$lname= mysql_real_escape_string($data->lname);
$city= mysql_real_escape_string($data->city);
$mob= mysql_real_escape_string($data->mob);

mysql_connect("localhost", "root", "0000");
mysql_select_db("agency");
mysql_query("INSERT INTO customers('FirstName', 'LastName','City','Mob') VALUES ('".$$fname."', '".$lname."', '".$city."', '".$mob."')"); 


?>