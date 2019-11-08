<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
$stream=isset($_REQUEST["stream"])?$_REQUEST["stream"]:"";
$session=isset($_REQUEST["session"])?$_REQUEST["session"]:"";
include("cont.php");
$p="delete from assignment  where assignmentid='$sid'";
$qry=mysqli_query($con,$p);
header("location:assignment_manage.php?session=$session&stream=$stream");
?>