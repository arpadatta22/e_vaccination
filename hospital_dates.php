<?php

$con=mysql_connect("localhost","root","") or die('Could not connect: ' . mysql_error());
 
mysql_select_db('e_vaccination');

$query="CREATE TABLE hospital_dates(name VARCHAR(40) NOT NULL,
							h_date DATE,
							timing VARCHAR(20) NOT NULL,
							c_name VARCHAR(15),
							p_username VARCHAR(15),
							status VARCHAR(6),
							FOREIGN KEY(p_username) REFERENCES parent(p_username),
							FOREIGN KEY(c_name) REFERENCES child(c_name))";
							
$result=mysql_query($query,$con);

if(! $result)
{
	die('Could not insert Records: ' . mysql_error());
}
echo "<h2>Create Table  Successfully ...</h2><br>";

?>