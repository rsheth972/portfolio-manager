<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="project";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection

if ($conn)
{
echo "Connected successfully";

    if(isset($_POST['register']))
		{
	
		$sql = "INSERT INTO user(uname, name, address, aadhar, pan, mob, email, dob, pwd) VALUES
		('".$_POST['uname']."','".$_POST['name']."','".$_POST['address']."','".$_POST['aadhar']."','".$_POST['pan']."','".$_POST['mob']."','".$_POST['email']."','".$_POST['dob']."','".$_POST['pwd']."')";
		
		mysqli_query($conn,$sql);
		echo "agc";
		mysqli_close($conn);
		header("location: index.php");

}
}
	?>