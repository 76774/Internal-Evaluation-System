<?php
include("validate.php");
$status=isset($_REQUEST["status"])?$_REQUEST["status"]:"";

$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="update allotsubject set status='$status' where allotid='$sid' ";
$qry=mysqli_query($con,$p);
header("location:allotsubject_manage.php");
?>