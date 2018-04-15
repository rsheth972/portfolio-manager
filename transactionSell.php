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

    if(isset($_POST['transactions']))
		{
	
            $sql3 = "INSERT INTO transactionb(uname, ssym,qty,rate,total,bdate) VALUES
            ('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$_POST['total'].",'".$_POST['bdate']."')";
            
            mysqli_query($conn,$sql3);
                }
            
            echo "agc";
		mysqli_close($conn);

}
}
	?>