<?php
session_start();

$ck=$_SESSION["check"];
if($ck!="on")
header("location:index.php");
?>
