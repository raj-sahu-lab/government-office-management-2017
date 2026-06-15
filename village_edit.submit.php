<?php
include("dbconnect.php");
if (!isset($_SESSION['LoginID']) || empty($_SESSION['LoginID'])) {
    header('Location: Login.php');
    exit;
}
if(isset($_REQUEST["id"]) && $_REQUEST["id"] !="")
{
        $vs_id          = 1;
        $panchayat      = (int)$_REQUEST["panchayat"];
        $village        = (int)$_REQUEST["village"];
        $visit_date     = mysql_real_escape_string($_REQUEST["visit_date"]);
        $problem_summary= mysql_real_escape_string($_REQUEST["problem_summary"]);
        $description    = mysql_real_escape_string($_REQUEST["description"]);

         $sql =  "update issue_master set
                    panchayat_id='". $panchayat ."', village_id='". $village ."', visit_date='". $visit_date ."',
                    problem_summary='". $problem_summary ."', description='". $description ."'
                where id=".(int)$_REQUEST["id"];
        $rs = mysql_query($sql);

        if($rs)
        {
        header("Location:village_issue_list.php?mode=success");
        exit;
        }
        else
        {
        header("Location:village_issue_list.php?mode=fail");
        exit;
        }
}
else
{
header("Location:village_issue_list.php?mode=invalid");
exit;
}
?>
