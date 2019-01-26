<?php
include 'con.php';
/*$conn = mysql_connect("localhost","root","root") or die("Could not connect to sever!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!");*/ 
$rollno = $_POST['rollno'];
$password = $_POST['password'];
$result = mysql_query("select * from member where rollno='$rollno' and password='$password'",$conn);
$num_rows = mysql_num_rows($result);
if($num_rows==0)
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Sorry! You have entered the wrong roll number or password. Please <a href="signinform.php">retry</a>.</h1></body>';}
else if($num_rows==1)
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>You have successfully signed in. Click <a href="home.php">here</a>.</h1></body>';
session_start();
$_SESSION['loggedin']=true;
$_SESSION['password']=$password;
$_SESSION['rollno']= $rollno;
}
?>