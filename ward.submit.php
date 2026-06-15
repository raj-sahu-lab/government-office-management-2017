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
        $issue_status   = mysql_real_escape_string($_REQUEST["issue_status"]);


         $sql =  "INSERT INTO issue_master
                 (vs_id, ward_id, visit_date, problem_summary,
                description, issue_status, created_by_id, created_date)
                VALUES ('". $vs_id ."', '". $ward_id ."', '". $visit_date ."', '". $problem_summary ."',
                 '". $description ."', '". $issue_status ."' , '". (int)$_SESSION['UID'] ."', now() )";
        $rs = mysql_query($sql);
        $_SESSION["sWard"]  = (int)$_REQUEST["ward_id"];
        $_SESSION["sDT"]    = mysql_real_escape_string($_REQUEST["visit_date"]);
        if($rs)
        {
        $sql_progress  ="insert into issue_progress ( issue_id, issue_status, updated_date) values (". mysql_insert_id() .", '". $issue_status ."', '". $visit_date ."'  ) " ;
        mysql_query($sql_progress) ;
        header("Location:ward_visit.php?mode=success");
        exit;
        }
        else
        {
        header("Location:ward_visit.php?mode=fail");
        exit;
        }
?>
