<?php
include("dbconnect.php");

if (!isset($_SESSION['LoginID']) || empty($_SESSION['LoginID'])) {
    header('Location: Login.php');
    exit;
}

        $vs_id          = 1;
        $ward_id        = (int)$_REQUEST["ward_id"];
        $visit_date     = mysql_real_escape_string($_REQUEST["visit_date"]);
        $problem_summary= mysql_real_escape_string($_REQUEST["problem_summary"]);
        $description    = mysql_real_escape_string($_REQUEST["description"]);



         $sql =  " update issue_master set
                    ward_id='". $ward_id ."', visit_date='". $visit_date ."', problem_summary='". $problem_summary ."',
                    description='". $description ."'
                  where id = ".(int)$_REQUEST["id"];
        $rs = mysql_query($sql);

        if($rs)
        {
        header("Location:issue_list.php?mode=success");
        exit;
        }
        else
        {
        header("Location:issue_list.php?mode=fail");
        exit;
        }
?>
