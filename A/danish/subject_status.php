<?php
include("validate.php");
$status=isset($_REQUEST["status"])?$_REQUEST["status"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="update subject set status='$status' where subjectid='$sid' ";
$qry=mysqli_query($con,$p);
header("location:subject_manage.php");
?>