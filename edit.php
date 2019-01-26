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
<br><form method="post" action="editdp.php" enctype="multipart/form-data"><input name="uploadedimage" type="file"><input type="submit" name="delete" value="Edit Profile Picture"></form>
<form method="post" action="editfn.php"><input type="text" name="fname"  placeholder="First Name" required /><input type="submit" name="delete" value="Edit First Name"></form>
<form method="post" action="editln.php"><input type="text" name="lname"  placeholder="Last Name" required /><input type="submit" name="delete" value="Edit Last Name"></form>
<form method="post" action="editb.php"><input type="text" name="branch"  placeholder="Branch" required/><input type="submit" name="delete" value="Edit Branch"></form>
<form method="post" action="editcn.php"><input type="number" name="no" placeholder="Contact Number" required/> <input type="submit" name="delete" value="Edit Contact Number"></form>
<form method="post" action="editp.php"><input type="password" name="password" id="password" placeholder="Password" required/><input type="submit" name="delete" value="Edit Password"></form>

<form method="post" action="edit1.php"><input type="number" name="sgpa1" placeholder="Semester 1 SGPA" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="edit2.php"><input type="number" name="sgpa2" placeholder="Semester 2 SGPA" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="edit3.php"><input type="number" name="sgpa3" placeholder="Semester 3 SGPA" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="edit4.php"><input type="number" name="sgpa4" placeholder="Semester 4 SGPA" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="edit5.php"><input type="number" name="sgpa5" placeholder="Semester 5 SGPA" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="edit6.php"><input type="number" name="sgpa6" placeholder="Semester 6 SGPA" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="edit7.php"><input type="number" name="sgpa7" placeholder="Semester 7 SGPA" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="edit8.php"><input type="number" name="sgpa8" placeholder="Semester 8 SGPA" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="editDOB.php"><input type="date" name="date_of_birth" id="password" placeholder="Date Of Birth" required/><input type="submit" name="delete" value="Edit"></form>
<form method="post" action="deletepro.php"><input type="submit" name="delete" value="Delete Account"></form>

</body><br>';
}

else
{echo '<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head><body background="bg.jpg" align="middle">
<br><br><br><br><br><br><br><br><br>
<img src="logo.png" height="170px" width="190px"/><br><br>
<h1>Please <a href="signinform.php">login</a> first!</h1></body>';}