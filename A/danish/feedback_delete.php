<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="delete from feedback  where feedbackid='$sid'";
$qry=mysqli_query($con,$p);
header("location:feedback_manage.php");
?>