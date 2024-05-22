<?php
include 'include/connection.php';
session_start();
echo "<script>alert('Are you sure you want to logout');window.location.href='login.php';</script>";
session_destroy();
?>