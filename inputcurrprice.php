<?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db="project";
                
                    // Create connection
                $conn = mysqli_connect($servername, $username, $password, $db);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                /*$username=$_SESSION['login_user'];*/
                $sql = "SELECT ssym, qty, rate, total FROM stocks;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                   while($row = mysqli_fetch_assoc($result)) {
                        $ssym=$row["ssym"];
                        $qty=$row["qty"];
                        $rate=$row["rate"];
                        $total=$row["total"];
                        /*if($ssym='".$_POST['postssymb']."')*/
                        if($ssym='WIPRO')
                        {
                            $currprice=150;
                            $profit=(($row["qty"] * $currprice)-$row["total"]);
                            $pper=(($profit/$row["total"])*100);
                            $sql1 = "UPDATE stocks SET currprice=$currprice,profit=$profit,pper=$pper WHERE stocks.ssym = 'WIPRO' AND rate=$rate AND qty=$qty ;";
                        if (mysqli_query($conn, $sql1)) {
                            echo "Record updated successfully";
                        } else {
                            echo "<br>Error updating record: updation<br> " . mysqli_error($conn);
                        }
                        }
                        
                    }
                }
                mysqli_close($conn);
                
 ?>