<?PHP
require_once("sql.php");
if( !isset($_POST['lunch'])) 
{
	header("Location:index.php");
	exit;
}

if( ($_POST['lunch'] == Almaza))
{
	//header("Location:testadmin.php");
	//exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html>
<head>
<title>USER Page</title>
</head>

<body>
Today's food preference : <br/>

</body>
</html>	
