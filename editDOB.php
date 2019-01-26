<?php
include 'con.php';
/*$conn = mysql_connect("localhost","root","root") or die("Could not connect to database!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!");*/
$date_of_birth=$_POST['date_of_birth'];
session_start();
$rollno = $_SESSION['rollno'];
$password = $_SESSION['password'];
$_SESSION['loggedin'];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
$sql="UPDATE member
SET date_of_birth='$date_of_birth'
WHERE rollno='$rollno';
";
  $qury=mysql_query($sql);
  echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Your Date of Birth has been changed! Click <a href="profile.php">here</a>.</h1></body>';
}
else
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please <a href="signinform.php">login</a> first!</h1></body>';}
?>