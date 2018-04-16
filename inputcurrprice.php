<?php 
                echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
                ";
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

                /*$querySym = "SELECT ssym from stocks;";

                $sym = mysqli_query($conn, $querySym);
                $symString = "";
                if (mysqli_num_rows($sym) > 0) {
                    while($row = mysqli_fetch_assoc($sym)) {
                        $symString = $symString.$row['ssym'].",";
                    }
                    $list = substr_replace($symString, "", -1);
                }
                
                $url = "https://www.alphavantage.co/query?function=BATCH_STOCK_QUOTES&symbols=".$list."&apikey=MUPL9IQMVVNXK8FS";

                //echo $url;

                echo "<script type = \"text/javascript\">     
                // $(document).ready(function() { 
                //    setInterval(displayPrice,3000); 
                //   });  
                  var request = new XMLHttpRequest();  
                  var count = 0;   
                  request.open(\"GET\", \"".$url."\");   
                      request.responseText = \"json\";   
                      var obj; 
                      request.onload = function() {    
                          obj = JSON.parse(request.response);  
                          var str = \"stock\";   
                          console.log(obj);
                          console.log(obj[0]);
                         // $.post(\"inputcurrprice.php\",obj,json);
                          ++count; 
                      };   
                      request.send();  
                       
            </script> ";
            */
           // $obj=$_REQUEST['obj'];
             //  echo $_POST['obj'];
                /*$username=$_SESSION['login_user'];*/
               // $directions = json_decode($_POST["data"]);
                //var_dump($directions);
                echo $_POST['ssym'];
                $sql = "SELECT ssym, qty, rate, total FROM stocks;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                   while($row = mysqli_fetch_assoc($result)) {
                        $ssym=$row["ssym"];
                        $qty=$row["qty"];
                        $rate=$row["rate"];
                        $total=$row["total"];
                        /*if($ssym='".$_POST['postssymb']."')*/
                        if($ssym=$_POST['ssym'])
                        {
                            $currprice=$_POST['rate']*67;
                            $profit=(($row["qty"] * $currprice)-$row["total"]);
                            $pper=(($profit/$row["total"])*100);
                            $sql1 = "UPDATE stocks SET currprice=$currprice,profit=$profit,pper=$pper WHERE stocks.ssym = '".$_POST['ssym']."' AND rate=$rate AND qty=$qty ;";
                        if (mysqli_query($conn, $sql1)) {
                            echo "Record updated successfully";
                        } else {
                            echo "<br>Error updating record: updation<br> " . mysqli_error($conn);
                        }
                        }
                        
                    }
                }
                mysqli_close($conn);
                header("location: Userpage.php");
                
 ?>