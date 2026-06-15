<?php
include("dbconnect.php");
$id=(int)$_GET["id"];

if(isset($_GET["vid"]))
{
	$vid = $_GET["vid"];
}


if($id!="0")
{
	$sql=" select ID,sName from `anumodan` where ParentId='".$id."'";
	
	$result = mysql_query($sql);
	
	  echo "<select name=anumodan_name style='width: 100; height: 21'>";
	  echo "<option value='0'>---- Select ----</option>";
	  while($row = mysql_fetch_array($result))
	  {
		if($vid==$row['ID'])
		{
		$selected = " selected ";
		}
		else
		{
		$selected = " ";
		}
	  echo "<option value=". $row['ID'] ." " . $selected .">";
	  echo $row['sName'];
	  echo "</option>";
	  }
	  echo "</select>";
}	  

mysql_close($con);
?>