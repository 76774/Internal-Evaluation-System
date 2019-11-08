<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";

include("cont.php");
$p="delete from allotsubject  where allotid='$sid'";
$qry=mysqli_query($con,$p);
header("location:allotsubject_manage.php");
?>
