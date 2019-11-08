<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="delete from subject  where subjectid='$sid'";
$qry=mysqli_query($con,$p);
header("location:subject_manage.php");
?>