<?php
include("validate.php");
$session=$_REQUEST["session"];
$stream=$_REQUEST["stream"];



$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="delete from attendance  where attendanceid='$sid'";
$qry=mysqli_query($con,$p);
header("location:attendance_manage.php?session=$session&stream=$stream");
?>