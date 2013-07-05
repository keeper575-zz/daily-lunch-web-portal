<?PHP
require_once("sql.php");
/*$user = $_POST['user'];
  $pass = $_POST['pass'];*/
$referrer = $_SERVER['HTTP_REFERER'];
if($referrer != "http://127.0.0.1/food/index.php" && $referrer != "http://192.168.1.175/food/index.php")
{
//	echo "invalid referrer";
	header("Location:index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html>
<head>
<title>ADMIN Page</title>
</head>

<body>

<?php
//echo "referrer - " . $_SERVER['HTTP_REFERER']; 
$query = "SELECT *
FROM info";
$result_set = mysql_query($query);
$nu = mysql_num_rows($result_set);
echo "<p>Total number of users:".$nu."</p>";
while($row = mysql_fetch_array($result_set))
{
	echo "<p> Name:".$row['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Username:".$row['user'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<a href='userdetails.php?username=".$row['user']." '>View More</a>" . "</p>";
}



?>
</body>
</html>	      
