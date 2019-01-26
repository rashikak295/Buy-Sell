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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$branch=$_POST['branch'];
$no=$_POST['no'];
$rollno=$_POST['rollno'];
$password=$_POST['password'];
$sgpa1=$_POST['sgpa1'];
$sgpa2=$_POST['sgpa2'];
$sgpa3=$_POST['sgpa3'];
$sgpa4=$_POST['sgpa4'];
$sgpa5=$_POST['sgpa5'];
$sgpa6=$_POST['sgpa6'];
$sgpa7=$_POST['sgpa7'];
$sgpa8=$_POST['sgpa8'];
$date_of_birth=$_POST['date_of_birth'];
$file_name=$_FILES["uploadedimage"]["name"];
 $temp_name=$_FILES["uploadedimage"]["tmp_name"];
 $imgtype=$_FILES["uploadedimage"]["type"];
 $ext= GetImageExtension($imgtype);
 $imagename=date("d-m-Y-h-m-s",time()).$ext;
 $target_path ="dp/".$imagename;
move_uploaded_file($temp_name, $target_path);
$mysql_get_users=mysql_query("select * from member where rollno='$rollno'");
$get_rows=mysql_affected_rows($conn);
if($get_rows>=1)
echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>That roll number already exists! Please enter your roll number <a href="signupform.php">again</a>.</h1></body>';
else
{
$sql="insert into member(dp_path,fname,lname,branch,no,rollno,password,sgpa1,sgpa2,sgpa3,sgpa4,sgpa5,sgpa6,sgpa7,sgpa8,date_of_birth) 
      values('$target_path','$fname','$lname','$branch','$no','$rollno','$password','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$date_of_birth')";
$qury=mysql_query($sql);
echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body background="bg.jpg" align="middle">
<br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/>
<h1>Welcome!</h1>
<form name="login" action="signinconnection.php" method="post">
<input type="number" name="rollno" placeholder="Roll Number" required> 
<input type="password" name="password" placeholder="Password" required>
<input type="submit" name="login" value="Login">
</form> 
</body>';
}
?>