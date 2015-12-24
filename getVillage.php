<?php
include("dbconnect.php");
$id=$_GET["id"];

if(isset($_GET["vid"]))
{
	$vid = $_GET["vid"];
}

$sql=" select id, village_name from village where vs_id=1 and panchayat_id='".$id."'";

$result = mysql_query($sql);

  echo "<select name=village style='width: 190; height: 21'>";
  echo "<option value='0'>---- Select Village ----</option>";
  while($row = mysql_fetch_array($result))
  {
 	if($vid==$row['id'])
	{
	$selected = " selected ";
	}
	else
	{
	$selected = " ";
	}
  echo "<option value=". $row['id'] ." " . $selected .">";
  echo $row['village_name'];
  echo "</option>";
  }
  echo "</select>";

mysql_close($con);
?>