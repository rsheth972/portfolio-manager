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

    if(isset($_POST['tbuy']))
		{
	
		$sql = "INSERT INTO transactions(uname, ssym,qty,rate,total,sdate) VALUES
		('".$_POST['uname']."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$_POST['total'].",'".$_POST['sdate']."')";
		
		mysqli_query($conn,$sql);
		echo "agc";
		mysqli_close($conn);

}
}
	?>