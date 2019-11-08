<?php
include("validate.php");
$status=isset($_REQUEST["status"])?$_REQUEST["status"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="update student_detail set status='$status' where studentid='$sid' ";
$qry=mysqli_query($con,$p);
header("location:student_manage_admin.php");
?>