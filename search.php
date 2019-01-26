<?php
include 'con.php';
/*$conn=mysql_connect("localhost","root","root") or die("Could not connect to database!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!");*/
$search=$_POST['q'];
session_start();
$_SESSION['loggedin'];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
$sql1 = "SELECT * FROM member where fname='$search' or lname='$search' or branch='$search' or no='$search' or rollno='$search'";
$r1 = mysql_query($sql1);
$num_rows1 = mysql_num_rows($r1);

$sql2 = "SELECT * FROM item where name='$search' or description='$search' or seller='$search' or seller_lname='$search' or branch='$search' or rollno='$search'";
$r2 = mysql_query($sql2);
$num_rows2 = mysql_num_rows($r2);

if($num_rows1>=1 || $num_rows2>=1 )
{
echo '<h1>People:</h1>';
while($row = mysql_fetch_array($r1))
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head><body background="bg.jpg" align="middle"><br><br><img height="200px" width="200px" src="'.$row['dp_path'].'">
<h1>'.$row['fname'].' '.$row['lname'].'</h1><br>Branch:'.$row['branch'].'<br>Roll number:'.$row['rollno'].'
</body><br>';}
echo '<br><h1>Achievements:</h1>';
while($row = mysql_fetch_array($r2))
{
echo '<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head><body background="bg.jpg" align="middle"><br><br><img alt="logo.png" height="200px" width="200px" src="'.$row['images_path'].'">
<br>Item name:<a href="aboutitem.php?id='.$row['images_id'].'">'.$row['name'].'</a></body>';
}
echo'<br><br><br><a href="home.php">home</a>';
}
else
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Oops there is no such thing! Please <a href="home.php">return</a>!</h1></body>';}
}
else
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please <a href="signinform.php">login</a> first!</h1></body>';}
?>