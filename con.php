<?php
$conn = mysql_connect("localhost","root","root") or die("Could not connect to sever!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!"); 
?>
