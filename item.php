<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head> 
<body background="bg.jpg" align="middle">
<br><img src="logo.png" height="170px" width="190px"/>
<form name="item" align="center" method="post" enctype="multipart/form-data" action="itemconnection.php">
Select Image:
<input name="uploadedimage" type="file">
<input type="text" name="name"  placeholder="Achievement Name" required/>
<input type="text" name="description" maxlength="100" placeholder="Achievement Description" required/>
<input type="text" name="seller" placeholder="First Name" required/>
<input type="text" name="seller_lname" placeholder="Last Name" required/>
<input type="text" name="branch" placeholder="Branch" required/>
<input type="number" name="rollno" placeholder="Roll No." required/>
<input type="submit" name="submit" value="Post"/>
</form>
<ul class="bg-bubbles">
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ul>
</body>
</html>