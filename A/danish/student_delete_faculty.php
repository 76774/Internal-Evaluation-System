<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="delete from student_detail  where studentid='$sid'";
$qry=mysqli_query($con,$p);
header("location:student_manage_faculty.php");
?>
