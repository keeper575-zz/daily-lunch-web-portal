<?PHP
require_once("sql.php");
$referrer = $_SERVER['HTTP_REFERER'];
if($referrer != "http://127.0.0.1/food/testadmin.php") //&& $referrer != "http://172.16.8.32/testadmin.php")
{
	header("Location:index.php");
}
?>

<html>
<head>
<title> user detail </title>
</head>
<body>

<?php
$query = "SELECT *
FROM info
WHERE user='{$_GET['username']}' ";
$result_set = mysql_query($query);
$row = mysql_fetch_array($result_set);
echo "<p> Name:".$row['name']."<p>";
echo "<p> Username:".$row['user']."<p>";
echo "<p> Age:".$row['age']."<p>";
echo "<p>sex:".$row['sex']."<p>";
echo "<p>  E-mail:".$row['email']."<p>";

?>
</body>
</html>
