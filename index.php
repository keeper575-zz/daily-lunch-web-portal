<html>

<head>
<title>registration</title>
<style type="text/css">
#wrapper {
	text-align: right;
}
</style>
	<script type="text/javascript">
function validate()
{
	var at=document.getElementById("email").value.indexOf("@");
	var passw=document.getElementById("pass").value;
	var lemail=document.getElementById("email").value;
	var user=document.getElementById("user").value;
	var nm=document.getElementById("name").value;
	submitOK="true";

	if (passw.length<6 && passw.length!=0)
	{
		alert("The password should contain at least 6 characters");
		submitOK="false";
	}
	if(passw.length==0 || user.length==0 || nm.length==0)
	{
		alert("please fill up the mandatory fields");
		submitOK="false";
	}
	if (at==-1 && lemail.length!=0) 
	{
		alert("Not a valid e-mail!");
		submitOK="false";
	}
	if (submitOK=="false")
	{
		return false;
	}
}
</script>
</head>
<body bgcolor=#ffffff>

<center> SIGN UP/LOGIN PAGE</center>
<br /><br />
<fieldset style="width:250px" align="center">
<legend>LOGIN</legend>
<form method="post" action="test3.php">
username <input type="text" name="user"><br />
password <input type="password" name="pass"><br />
<input type="submit" value="login"> &nbsp;&nbsp;&nbsp; &nbsp; <input type="reset" value="clear">
</form>
</fieldset>
<br /> <br />

<?PHP
if(isset($_GET['us']) && $_GET['us'] == "taken") {
	echo "<p>Username is already taken by someone else.Please try a new one</p>";
}

if(isset($_GET['try']) && $_GET['try'] == "false") {
	echo "<p>wrong username or password.Check if the caps lock is on.</p>";
}
?>
<div id="wrapper">
<p > <u><b>SIGN UP</b></u> <br / >
<i> fields with * are mandatory </i> <br />
<form action="test2.php" method="POST" onsubmit="return validate()" >

*Name<input type="text" name="name" id="name" ><br /> <br />
*username <input type="text" name="user" id="user" ><br /><br />
*password <input type="password" name="pass" id="pass" ><br /><br />
age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="int" name="age" ><br /><br />
sex  &nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="male">male  <input type="radio" name="sex" value="female">female<br /><br />
email ID <input type="text" name="email" id="email" ><br /><br />
<input type="submit" id="submit" value="done" >
&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="clear"><br /><br />

</form>
</ p>
</div>

</body>
</html>
