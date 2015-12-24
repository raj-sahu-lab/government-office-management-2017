<?php
include("dbconnect.php");

		 $sql =	"Update login set Password=[DB_PASSWORD]". md5($_POST['new_pass']) ."'  where ID=". $_SESSION['UID'] ;
		//echo $sql;  
		$rs = mysql_query($sql);
		if($rs)
		{
			header("Location:change_password.php?mode=success");
		}
		else
		{
			header("Location:change_password.php?mode=fail");
		}
?>