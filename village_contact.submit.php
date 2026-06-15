<?php
        include("dbconnect.php");

if (!isset($_SESSION['LoginID']) || empty($_SESSION['LoginID'])) {
    header('Location: Login.php');
    exit;
}

        $vs_id          = 1;
        $panchayat      = (int)$_REQUEST["panchayat"];
        $village        = (int)$_REQUEST["village"];
        $contact_name   = mysql_real_escape_string($_REQUEST["contact_name"]);
        $contact_number = mysql_real_escape_string($_REQUEST["mobile"]);
        $post           = mysql_real_escape_string($_REQUEST["post"]);
        $remarks        = mysql_real_escape_string($_REQUEST["remarks"]);

        $sql =  "INSERT INTO contact_master
                 (vs_id, panchayat_id, village_id, contact_name, contact_number,
                post, remarks, created_by_id, created_date)
                VALUES ('". $vs_id ."', '". $panchayat ."', '". $village ."', '". $contact_name ."', '". $contact_number ."',
                 '". $post ."', '". $remarks ."' , '". (int)$_SESSION['UID'] ."', now() )";
        $rs = mysql_query($sql);

        $_SESSION["sPanchayat"] = (int)$_REQUEST["panchayat"];
        $_SESSION["sVillage"]   = (int)$_REQUEST["village"];

        if($rs)
        {
        header("Location:village_contact.php?mode=success");
        exit;
        }
        else
        {
        header("Location:village_contact.php?mode=fail");
        exit;
        }
?>
