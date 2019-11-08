<?php
include("validate.php");
$status=isset($_REQUEST["status"])?$_REQUEST["status"]:"";
$stream=isset($_REQUEST["stream"])?$_REQUEST["stream"]:"";
$session=isset($_REQUEST["session"])?$_REQUEST["session"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="update assignment set status='$status' where assignmentid='$sid' ";
$qry=mysqli_query($con,$p);
header("location:assignment_manage.php?session=$session&stream=$stream");
?>