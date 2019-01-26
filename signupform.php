<!DOCTYPE HTML> 
<html> 
<head>
<script>
function validateForm()
{var a=document.forms.signup.fname.value;
var b=document.forms.signup.branch.value;
var c=document.forms.signup.rollno.value;
var d=document.forms.signup.password.value;
var e=document.forms.signup.lname.value;
if ((a==null || a=="")&&(b==null || b=="")&&(c==null || c=="")&&(d==null || d=="")&&(e==null || e==""))
{alert("All fields must be filled out!");
return false;}
if (a==null || a=="") 
{alert("All fields must be filled out!");
return false;}
if (b==null || b=="") 
{alert("All fields must be filled out!");
return false;}
if (c==null || c=="") 
{alert("All fields must be filled out!");
return false;}
if (d==null || d=="")
{alert("All fields must be filled out!");
return false;}
if (e==null || e=="")
{alert("All fields must be filled out!");
return false;}
else
return true;}
</script>
<title>Signup</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head> 
<body background="bg.jpg" align="middle">
<br><br>
<img src="logo.png" height="170px" width="190px"/>
<form name="signup" align="center" action="signupconnection.php" enctype="multipart/form-data" onsubmit="return validateForm()" method="post">
Select Profile Picture:
<input name="uploadedimage" type="file">
<input type="text" name="fname"  placeholder="First Name" required />
<input type="text" name="lname"  placeholder="Last Name" required />
<input type="text" name="branch"  placeholder="Branch" required/>
<input type="number" name="no" placeholder="Contact Number" required/> 
<input type="number" name="rollno" placeholder="Roll Number" required/>
<input type="number" name="sgpa1" placeholder="Semester 1 SGPA" required/>
<input type="number" name="sgpa2" placeholder="Semester 2 SGPA" required/>
<input type="number" name="sgpa3" placeholder="Semester 3 SGPA" required/>
<input type="number" name="sgpa4" placeholder="Semester 4 SGPA" required/>
<input type="number" name="sgpa5" placeholder="Semester 5 SGPA" required/>
<input type="number" name="sgpa6" placeholder="Semester 6 SGPA" required/>
<input type="number" name="sgpa7" placeholder="Semester 7 SGPA" required/>
<input type="number" name="sgpa8" placeholder="Semester 7 SGPA" required/>
<input type="date" name="date_of_birth" placeholder="Date Of Birth" required/>
<input type="password" name="password" id="password" placeholder="Password" required/>
<br>
<input type="submit" name="submit" value="Submit" />
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