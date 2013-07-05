<?PHP

$host='localhost';
$user='root';
$pass='apj0702';
$conn=mysql_connect($host, $user, $pass) or die("error in mysql connection");
$dbname=testsite;
mysql_select_db($dbname ,$conn);


?>
