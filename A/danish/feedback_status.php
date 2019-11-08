<?php
include("validate.php");
$status=isset($_REQUEST["status"])?$_REQUEST["status"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="update feedback set status='$status' where feedbackid='$sid' ";
$qry=mysqli_query($con,$p);
header("location:feedback_manage.php");
?>