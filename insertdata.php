<?php
include('session.php');
$servername = "localhost";
$username = "root";
$password = "";
$db="project";
$user = $_SESSION['login_user'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection

if ($conn)
{
echo "Connected successfully";

    if(isset($_POST['add']))
		{echo "Connected jfkfjytfkytfkuyg successfully";

            $check = "SELECT COUNT(*) FROM stocks WHERE stocks.ssym = ".$_POST['ssym']." AND stocks.uname = ".$user.";";
            $result = mysqli_query($conn, "SELECT COUNT(*) FROM stocks WHERE stocks.ssym = ".$_POST['ssym']." AND stocks.uname = ".$user.";");
            $row_cnt = mysqli_num_rows($result);
            printf("Result set has %d rows.\n", $row_cnt);
            echo "Connected by query<br>";
            $result=2;
            if(mysqli_num_rows($result))
            {
                echo "Connected by <br>";
                $sql = "SELECT qty, rate FROM stocks WHERE stocks.ssym = ".$_POST['ssym']." AND stocks.uname = ".$user."";
                $result1 = mysqli_query($conn, $sql);
                $qty = ".$_POST[qty].";
                $rate =".$_POST[rate].";
                $total = $qty * $rate;
                while($row = mysqli_fetch_assoc($result1)) {
                    $qty=$qty+$row["qty"];
                    $total = $total + $row["total"];
                    $rate=$total/$qty;
                }
                $sql1 = "UPDATE stocks SET qty=$qty,rate=$rate,total=$total WHERE stocks.ssym = ".$_POST['ssym']." AND stocks.uname = ".$user."";
                if (mysqli_query($conn, $sql1)) {
                    echo "Record updated successfully";
                } else {
                    echo "<br>Error updating record: updation<br> " . mysqli_error($conn);
                }
                
            } 
            else {
                $sql = "INSERT INTO stocks VALUES('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$_POST['total'].")";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: new insertion<br> " . mysqli_error($conn);
        }
		
            }
            $sql3 = "INSERT INTO transactionb(uname, ssym,qty,rate,total,bdate) VALUES
		('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$_POST['total'].",'".$_POST['bdate']."')";
		
		mysqli_query($conn,$sql3);
            }
            else if(isset($_POST['transactions']))
            {
	
                $sql3 = "INSERT INTO transactions(uname, ssym,qty,rate,total,sdate) VALUES
                ('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$_POST['total'].",'".$_POST['bdate']."')";
                
                mysqli_query($conn,$sql3);
                    }
                
		
		echo "agc";
        mysqli_close($conn);
        header("location: Userpage.php");

}

	?>
