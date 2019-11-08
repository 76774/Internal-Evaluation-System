<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
$stream=isset($_REQUEST["stream"])?$_REQUEST["stream"]:"";
$session=isset($_REQUEST["session"])?$_REQUEST["session"]:"";
include("cont.php");
$p="delete from marks  where marksid='$sid'";
$qry=mysqli_query($con,$p);
header("location:marks_manage.php?session=$session&stream=$stream");
?>
