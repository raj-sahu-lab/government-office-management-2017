<?php
include("dbconnect.php");

        $LoginID 		= $_REQUEST["LoginID"];
	    $Password	 	= $_REQUEST["Password"];
		
		$sql =	"select Password,FirstName,LastName, ID, LoginType, install from login where LoginID='". $LoginID ."'";
				
		//mysql_query("SET NAMES utf8");
		$rs = mysql_query($sql);
		
		if(mysql_num_rows($rs)>0)
		{
			$row = mysql_fetch_row($rs);
			//print_r($row);
			
			if($row[0] == md5($Password))
			{
				$_SESSION['LoginID'] 	= $_REQUEST["LoginID"];
				$_SESSION['UserName'] 	= $row[1] . "  "  .$row[2];
				$_SESSION['UID'] 		= $row[3] ;
				$_SESSION['LoginType'] 	= $row[4] ;
				$_SESSION['install'] 	= $row[5] ;
				header("Location:home.php");
				
			}
			else
			{
				header("Location:index.php?mode=fail");
			}
		}
		else
		{
		header("Location:index.php?mode=fail");
		}
		
		
		//mysql_close($con);

		//echo "Data has been saved." ;
?>
