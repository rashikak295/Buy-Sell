<?php
include 'con.php';
/*$conn = mysql_connect("localhost","root","root") or die("Could not connect to database!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!");*/
$id = $_POST['itemid'];
session_start();
$rollno = $_SESSION['rollno'];
$_SESSION['loggedin'];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
$sql = "select * from item where images_id='$id' and rollno='$rollno'";
$rs = mysql_query($sql);
$num_rows = mysql_num_rows($rs);
if($num_rows==1)
{
$del = mysql_query("delete from item where images_id='$id'",$conn);
echo'<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Your add has been deleted! Click <a href="profile.php">here</a>.</h1></body>';  
}
else {
echo'<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please write the correct Item id <a href="profile.php">again</a>.</h1></body>';   
}}
else
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please <a href="signinform.php">login</a> first!</h1></body>';}
?>