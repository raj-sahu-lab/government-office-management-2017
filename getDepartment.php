<?php
include("dbconnect.php");
$id=$_GET["id"];

if(isset($_GET["vid"]))
{
	$vid = $_GET["vid"];
}

$sql=" select id, personid, department from person_department where PersonID='".$id."'";

$result = mysql_query($sql);

  echo "<select name=department style='width: 170; height: 21'>";
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
  echo "<option value=". $row['id'] ." " . $selected .">";
  echo $row['department'];
  echo "</option>";
  }
  echo "</select>";

mysql_close($con);
?>