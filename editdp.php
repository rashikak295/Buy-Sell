<?php
include 'con.php';
/*$conn = mysql_connect("localhost","root","root") or die("Could not connect to database!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!");*/
function GetImageExtension($imagetype)
{if(empty($imagetype)) return false;
switch($imagetype)
{case 'image/bmp': return '.bmp';
case 'image/gif': return '.gif';
case 'image/jpeg': return '.jpg';
case 'image/png': return '.png';
default: return false;}}
$file_name=$_FILES["uploadedimage"]["name"];
 $temp_name=$_FILES["uploadedimage"]["tmp_name"];
 $imgtype=$_FILES["uploadedimage"]["type"];
 $ext= GetImageExtension($imgtype);
 $imagename=date("d-m-Y-h-m-s",time()).$ext;
 $target_path ="dp/".$imagename;
move_uploaded_file($temp_name, $target_path);

session_start();
$rollno = $_SESSION['rollno'];
$password = $_SESSION['password'];
$_SESSION['loggedin'];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
$sql="UPDATE member
SET dp_path='$target_path'
WHERE rollno='$rollno';
";
  $qury=mysql_query($sql);
  echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Your Profile picture has been changed! Click <a href="profile.php">here</a>.</h1></body>';
}
else
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please <a href="signinform.php">login</a> first!</h1></body>';}
?>