<?php
include 'con.php';
/*$conn=mysql_connect("localhost","root","root") or die("Could not connect to database!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!");*/
session_start();
$rollno = $_SESSION['rollno'];
$password = $_SESSION['password'];
$_SESSION['loggedin'];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
$result = "select * from member where rollno='$rollno' and password='$password'";
$rs = mysql_query($result);
while($row = mysql_fetch_array($rs))
{
echo '<head>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <style>
  body 
  {font-family: Source Sans Pro, sans-serif;
  color: white;
  font-weight: 300;
  font-size:20px;}
  </style>
  </head> 
<body align="middle">
<div align="middle"><br>
<table>
<tr>
<td><img src="logo.png" height="70px" width="90px"/></td>
<form id="tfnewsearch" method="post" action="search.php">
<td><input style=" text-align: center;
  font-size: 18px; width: 250px;border-radius: 3px; height:40px; border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);" type="text" class="tftextinput" name="q" size="50" maxlength="120" placeholder="What are you looking for?" required></td>
<td><input style="appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);
  width: 250px;
  cursor: pointer;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;" type="submit" value="Search" class="tfbutton"></td>
</form>
<td><form action="item.php">
<input type="submit" value="Post Achievement">
</form></td>   
<td><form action="logout.php">
<input type="submit" value="Signout">
</form></td>
</tr>
</table>
<table cellspacing="20"><tr><td>|</td><td><a href="home.php">HOME</a></td><td>|</td><td><a href="about.php">ABOUT US</a></td><td>|</td><td><a href="help.php">HELP</a></td><td>|</td><td><a href="contactus.php">CONTACT US</a></td><td>|</td></tr></table>
</div>
<br><img height="200px" width="200px" src="'.$row['dp_path'].'">
<h1>'.$row['fname'].' '.$row['lname'].'</h1><br>Branch:'.$row['branch'].'<br>Roll number:'.$row['rollno'].'
<br>Date Of Birth:'.$row['date_of_birth'].'<br>Contact number:'.$row['no'].'<br>SGPA:<br>Semester 1:'.$row['sgpa1'].'<br>
Semester 2:'.$row['sgpa2'].'<br>
Semester 3:'.$row['sgpa3'].'<br>
Semester 4:'.$row['sgpa4'].'<br>
Semester 5:'.$row['sgpa5'].'<br>
Semester 6:'.$row['sgpa6'].'<br>
Semester 7:'.$row['sgpa7'].'<br>
Semester 8:'.$row['sgpa8'].'<br><br>
<a href="edit.php">Edit Account</a></body><br><br>';
}
$r= "select * from item where rollno='$rollno' ORDER BY images_id DESC";
$a= mysql_query($r);
echo'<body align="middle">
<h1>My Achievements:</h1>
<div align="middle">
<br>
<form action="delete.php" method="post">
<table>
<tr>
<td>
<input type="number" name="itemid" placeholder="Achievement id" required>
</td>
<td>
<input type="submit" name="delete" value="Delete Achievement">
</td></tr></table></form></div></body>';
while($row = mysql_fetch_array($a))
{
echo '<br><body align="middle"><a href="aboutitem.php?id='.$row['images_id'].'"><img alt="logo.png" height="200px" width="200px" src="'.$row['images_path'].'"></a><br>Achievement id:'.$row['images_id'].'<br>Achievement name:<a href="aboutitem.php?id='.$row['images_id'].'">'.$row['name'].'</a><br></body><br><br>';
}
}
else
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please <a href="signinform.php">login</a> first!</h1></body>';}
?>