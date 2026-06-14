<?php
include("dbconnect.php");

		 $new_pass_hash = md5($_POST['new_pass']);
		 $uid = (int)$_SESSION['UID'];
		 $sql = "Update login set Password='" . mysql_real_escape_string($new_pass_hash) . "' where ID=" . $uid;
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