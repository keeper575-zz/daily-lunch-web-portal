<?PHP
require_once("sql.php");
if( !isset($_POST['user']) || !isset($_POST['pass']) ) 
{
	header("Location:index.php");
	exit;
}
$user = "admin";
$pass = "gauravkumar";

if( ($_POST['user'] == $user) && ($_POST['pass'] == $pass) )
{
	//echo "sending to next page";
	header("Location:testadmin.php");
	exit;
}
$usr = mysql_real_escape_string($_POST['user']);
$pss = mysql_real_escape_string($_POST['pass']);
$query = "SELECT user FROM info WHERE user='{$usr}'  AND pass='{$pss}' ";

$result_set = mysql_query($query);
if(mysql_num_rows($result_set)==0) {
	header("Location:index.php?try=false");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html>
<head>
<title>USER Page</title>
</head>

<body>

<?php
$query = "SELECT *
FROM info
WHERE user='{$_POST[user]}' ";
$result_set = mysql_query($query);
$row = mysql_fetch_array($result_set);
echo "<p> Name:".$row['name']."<p>";
echo "<p> Username:".$row['user']."<p>";
echo "<p> Age:".$row['age']."<p>";
echo "<p>sex:".$row['sex']."<p>";
echo "<p>  E-mail:".$row['email']."<p>";

?>
<br /><br /><br />

Select one:<form action=test4.php>
<input type="radio" name="Almaza" value="Almaza">Almaza<br /><br />
<input type="radio" name="Tiffin" value="Tiffin">Tiffin<br /><br />
<input type="radio" name="Uncle" value="Uncle">Uncle Sam <br /><br />
<input type="submit" value="done">
</form>
</body>
</html>	
