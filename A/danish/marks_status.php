<?php
include("validate.php");
$status=isset($_REQUEST["status"])?$_REQUEST["status"]:"";
$stream=isset($_REQUEST["stream"])?$_REQUEST["stream"]:"";
$session=isset($_REQUEST["session"])?$_REQUEST["session"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="update marks set status='$status' where marksid='$sid' ";
$qry=mysqli_query($con,$p);
header("location:marks_manage.php?session=$session&stream=$stream");
?>