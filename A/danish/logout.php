<?php
session_start();
unset($_SESSION["check"]);
unset($_SESSION["userfaculty"]);
header("location:index.php");
?>