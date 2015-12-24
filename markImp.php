<?php
include("dbconnect.php");

if(isset($_SESSION['LoginID']) && $_SESSION['LoginID']!="")
{
}
else
{
	header("Location:index.php?mode=logout");
}

$id=$_GET["id"];

$id = explode("_",$id);
//print_r($id);
$sql="SELECT imp FROM letter_master WHERE id = '".$id[1]."'";
$result = mysql_query($sql);

$row = mysql_fetch_row($result);

if($row[0]=="N")
{
mysql_query("update letter_master set imp='Y' where id='".$id[1]."'");
echo "var mode='Y'; var id='".$_GET["id"] ."'";
}
else
{
mysql_query("update letter_master set imp='N' where id='".$id[1]."'");
echo "var mode='N'; var id='".$_GET["id"] ."'";

}
mysql_close($con);
?>