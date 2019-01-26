<?php
include 'con.php';
/*$conn=mysql_connect("localhost","root","root") or die("Could not connect to database!");
$db = mysql_select_db("Login",$conn) or die("Could not select the database!");*/
session_start();
$rollno = $_SESSION['rollno'];
$password = $_SESSION['password'];
$strSQL1 = "SELECT * FROM member where rollno='$rollno' and password='$password'";
$rs = mysql_query($strSQL1);
$a=mysql_real_escape_string($_GET['id']);
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{$query = mysql_query("select * from item WHERE images_id='$a'",$conn);
$num_rows = mysql_num_rows($query);
if($num_rows==0)
{
echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Sorry there is a problem! Please return to <a href="home.php">homepage</a>.</h1></body>';}
else 
{
while($roww = mysql_fetch_array($rs))
{$row = mysql_fetch_array($query);
echo '<head>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <style>
  form button:hover {
  background-color: #f5f7f9;
}
  body 
  {font-family: Source Sans Pro, sans-serif;
  color: white;
  font-weight: 300;
  font-size:20px;}
  </style>
  </head> <body align="center"><br>
<div align="middle">
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
<table cellspacing="20"><tr><td>|</td><td><a href="home.php">HOME</a></td><td>|</td><td><a href="profile.php">MY PROFILE  '.$row['fname'].'</a></td><td>|</td><td><a href="about.php">ABOUT US</a></td><td>|</td><td><a href="help.php">HELP</a></td><td>|</td><td><a href="contactus.php">CONTACT US</a></td><td>|</td></tr></table>
</div><br><img height="300px" width="400px" src="'.$row['images_path'].'"><h1>'.$row['name'].'</h1>Achievement description:'.$row['description'].'<br>Name:'.$row['seller'].'<br>Branch:'.$row['branch'].'<br><br></body>';
}}}
else
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please <a href="signinform.php">login</a> first!</h1></body>';}
?>