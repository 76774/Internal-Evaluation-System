<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="delete from account  where accountid='$sid'";
$qry=mysqli_query($con,$p);
header("location:account_manage.php");
?>
