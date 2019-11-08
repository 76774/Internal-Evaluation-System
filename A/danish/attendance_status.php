<?php

include("validate.php");

$session=$_REQUEST["session"];
$stream=$_REQUEST["stream"];
$status=isset($_REQUEST["status"])?$_REQUEST["status"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="update attendance set status='$status' where attendanceid='$sid' ";
$qry=mysqli_query($con,$p);
header("location:attendance_manage.php?session=$session&stream=$stream");
?>