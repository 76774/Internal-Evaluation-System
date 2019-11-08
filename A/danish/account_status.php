<?php
include("validate.php");
$status=isset($_REQUEST["status"])?$_REQUEST["status"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="update account set status='$status' where accountid='$sid' ";
$qry=mysqli_query($con,$p);
header("location:account_manage.php");
?>