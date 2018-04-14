<?php


session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['login'])) 
{
		if (empty($_POST['uname']) || empty($_POST['pwd'])) 
		{
			$error = "Username or Password is invalid";
		}

		else
		{
			// Define $uname and $pwd
			$uname = $_POST['uname'];
			$pwd = $_POST['pwd'];

			// mysqli_connect() function opens a new connection to the MySQL server.
			$conn = mysqli_connect("localhost", "root", "", "project");

			// SQL query to fetch information of registerd users and finds user match.
			$query = "SELECT uname, pwd from user where uname=? AND pwd=? LIMIT 1";

			// To protect MySQL injection for Security purpose
			$stmt = $conn->prepare($query);
			$stmt->bind_param("ss", $uname, $pwd);
			$stmt->execute();
			$stmt->bind_result($uname, $pwd);
			$stmt->store_result();

			if($stmt->fetch()) //fetching the contents of the row
			{
				$_SESSION['login_user'] = $uname; // Initializing Session
				header("location: Userpage.php"); // Redirecting To Profile Page
			}
			else 
			{
				$error = "Username or Password is invalid";
				header("location:index.php")
			}
			mysqli_close($conn); // Closing Connection
		}
}
?>