<?php

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "project");

session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT uname from user where uname = '$user_check'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$login_session = $row['uname'];		//this will be used in info.php
?>

