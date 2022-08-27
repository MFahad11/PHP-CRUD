<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";

$database = "food_app";

// Create connection
$con = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$con) {
  die("Connection failed: ");
}
