<?PHP
	require_once("sql.php");
	$query = "SELECT *	FROM info	WHERE user='{$_POST[user]}' ";
					$result_set = mysql_query($query);
					if(mysql_num_rows($result_set) != 0)
						{
						header("Location:index.php?us=taken");
						exit;
						}									
	
	$pass = $_POST[pass];	
	$query = "INSERT INTO info(name,user, pass, age, sex, email) VALUES('$_POST[name]','$_POST[user]', '$pass', '$_POST[age]', '$_POST[sex]', '$_POST[email]')";
	
	$result = mysql_query($query, $conn) or die(mysql_error($dbname));
?>
	
<HTML>
<HEAD>
<TITLE> THANK YOU </TITLE>
</HEAD>
	<BODY>
		<P ALIGN="CENTER">
		THANK YOU FOR REGISTERING.<BR />
		DON'T FORGET TO UPDATE YOUR LUNCH PREFERENCE.<BR />
		</P>
	</BODY>
</HTML>
