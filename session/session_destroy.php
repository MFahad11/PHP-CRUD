<?php
session_start();
session_destroy();
header("location:../foodpanda/login.php");
?>