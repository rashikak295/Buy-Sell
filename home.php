<?php
include 'con.php';
/*$conn = mysql_connect("localhost","root","root") or die("Could not connect to database!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!"); */
session_start();
$_SESSION['loggedin'];
$rollno = $_SESSION['rollno'];
$password = $_SESSION['password'];
$strSQL1 = "SELECT * FROM member where rollno='$rollno' and password='$password'";
$rs = mysql_query($strSQL1);
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{while($row = mysql_fetch_array($rs))
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
body 
{font-family: Source Sans Pro, sans-serif;
color: white;
font-weight: 300;
font-size:20px;}
</style>
</head> 
<body>
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
</tr></table>
<table cellspacing="20"><tr><td>|</td><td><a href="profile.php">HELLO  '.$row['fname'].' '.$row['lname'].'</a></td><td>|</td><td><a href="about.php">ABOUT US</a></td><td>|</td><td><a href="help.php">HELP</a></td><td>|</td><td><a href="contactus.php">CONTACT US</a></td><td>|</td></tr></table>
</div>
</body>';}
$strSQL = "SELECT * FROM item ORDER BY images_id DESC";
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs))
{echo '<br><body align="middle"><a href="aboutitem.php?id='.$row['images_id'].'"><img alt="logo.png" height="200px" width="300px" src="'.$row['images_path'].'"></a></body><br><br>';
echo '<body align="middle">Achievement name:<a href="aboutitem.php?id='.$row['images_id'].'">'.$row['name'].'</a></body><br><br><br>';}}
else
{
echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please <a href="signinform.php">login</a> first!</h1></body>';}
?>