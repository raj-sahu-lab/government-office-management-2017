<?php
include("dbconnect.php");
$id=(int)$_GET["id"];

if(isset($_GET["vid"]))
{
	$vid = $_GET["vid"];
}

$sql=" select ID, District_Name from district where State_Id='".$id."'";

$result = mysql_query($sql);

  echo "<select name=District_Name style='width: 130; height: 21'>";
  echo "<option value='0'>---- Select ----</option>";
  while($row = mysql_fetch_array($result))
  {
 	//if($vid==$row['id'])
	//{
	//$selected = " selected ";
	//}
	//else
	//{
	$selected = " ";
	//}
  echo "<option value=". $row['ID'] ." " . $selected .">";
  echo $row['District_Name'];
  echo "</option>";
  }
  echo "</select>";

mysql_close($con);
?>