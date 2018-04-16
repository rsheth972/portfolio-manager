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

            // $check = "SELECT count(stocks.ssym) from stocks WHERE stocks.ssym = ".$_POST['ssym']." AND stocks.uname = '$user';";
            // $result = mysqli_query($conn,$check);
            // $row_cnt = mysqli_num_rows($result);
            // printf("Result set has %d rows.\n", $row_cnt);
            // echo "Connected by query<br>";
            // //$result=2;
            $result=1;
            if($result>0)
            // {   echo "IN if <br>";
            //     echo "Connected by <br>";
                $sql = "SELECT * FROM stocks WHERE stocks.ssym = '".$_POST['ssym']."' AND stocks.uname = '".$user."'";
                $result1 = mysqli_query($conn, $sql);
                //echo $result1;
                echo $sql;
            // exit();
                $qty = $_POST['qty'];
                $rate =$_POST['rate'];
                /*$uname=$_POST['uname'];
                $ssym=$_POST['ssym'];*/
                $total = $qty * $rate;
                // echo "total=" .$total; 
                while($row = mysqli_fetch_assoc($result1)) {
                    $qty=$qty+$row["qty"];
                    $total = $total + $row["total"];
                    $uname=$row["uname"];
                    $ssym=$row["ssym"];
                    $rate=$row["rate"];
                    //$rate=$total/$qty;
                }
                $rate=$total/$qty;
                $delete = "DELETE from stocks where stocks.ssym = '".$_POST['ssym']."' AND stocks.uname = '".$user."'";
                if (mysqli_query($conn, $delete)) {
                    echo "Record updated successfully";
                } else {
                    echo "<br>Error updating record: updation<br> " . mysqli_error($conn);
                }
                $sql1 = "INSERT INTO stocks(uname,ssym,qty,rate,total) VALUES('".$user."','".$_POST['ssym']."',".$qty.",".$rate.",".$total.")";
               // $sql1 = "UPDATE stocks SET qty=$qty,rate=$rate,total=$total WHERE stocks.ssym = ".$_POST['ssym']." AND stocks.uname ='$user'";
                if (mysqli_query($conn, $sql1)) {
                    echo "Record updated successfully";
                } else {
                    echo "<br>Error updating record: updation<br> " . mysqli_error($conn);
                }
                $qty = $_POST['qty'];
                $rate =$_POST['rate'];
                /*$uname=$_POST['uname'];
                $ssym=$_POST['ssym'];*/
                $total = $qty * $rate;
                $sql3 = "INSERT INTO transactionb(uname, ssym,qty,rate,total,bdate) VALUES
                ('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$total.",'".$_POST['bdate']."')";
                
                mysqli_query($conn,$sql3);
                
            } 
            else if(isset($_POST['transactions']))
            {
	
                // $sql3 = "INSERT INTO transactions(uname, ssym,qty,rate,total,sdate) VALUES
                // ('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$_POST['total'].",'".$_POST['bdate']."')";
                
                // mysqli_query($conn,$sql3);
                $sql = "SELECT * FROM stocks WHERE stocks.ssym = '".$_POST['ssym']."' AND stocks.uname = '".$user."'";
                $result1 = mysqli_query($conn, $sql);
                //echo $result1;
                //echo $sql;
            // exit();
                $qty = $_POST['qty'];
                $rate =$_POST['rate']; 
                while($row = mysqli_fetch_assoc($result1)) {
                    $qty=$row["qty"]-$qty;
                    
                    $uname=$row["uname"];
                    $ssym=$row["ssym"];
                    $rate=$row["rate"];
                    $total = $qty * $rate;
                }
                //Deleting from stocks
                $delete = "DELETE from stocks where stocks.ssym = '".$_POST['ssym']."' AND stocks.uname = '".$user."'";
                if (mysqli_query($conn, $delete)) {
                    echo "Record updated successfully";
                } else {
                    echo "<br>Error updating record: updation<br> " . mysqli_error($conn);
                }
                $sql1 = "INSERT INTO stocks(uname,ssym,qty,rate,total) VALUES('".$user."','".$_POST['ssym']."',".$qty.",".$rate.",".$total.")";
               
                if (mysqli_query($conn, $sql1)) {
                    echo "Record updated successfully";
                } else {
                    echo "<br>Error updating record: updation<br> " . mysqli_error($conn);
                }
                $qty = $_POST['qty'];
                $rate =$_POST['rate'];
                $total = $qty * $rate;
                $sql3 = "INSERT INTO transactions(uname, ssym,qty,rate,total,sdate) VALUES
                ('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$total.",'".$_POST['sdate']."')";
                mysqli_query($conn,$sql3);
                
            } 
            
        //     else {
        //         $sql3 = "INSERT INTO transactions(uname, ssym,qty,rate,total,bdate) VALUES
        //         ('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$_POST['total'].",'".$_POST['bdate']."')";
                
        //         mysqli_query($conn,$sql3);
        //         $sql = "INSERT INTO stocks(uname,ssym,qty,rate,total) VALUES('".$user."','".$_POST['ssym']."',".$_POST['qty'].",".$_POST['rate'].",".$_POST['total'].")";
        // if (mysqli_query($conn, $sql)) {
        //     echo "Record added successfully";
        // } else {
        //     echo "Error updating record: new insertion<br> " . mysqli_error($conn);
        // }
		
        //     }
        echo "agc";
        mysqli_close($conn);
        header("location: Userpage.php");
        

                    }
                
		
		


	?>
