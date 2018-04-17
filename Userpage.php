
<!DOCTYPE html>
<?php
include('session.php');
if(!isset($_SESSION['login_user']))
{
header("location: index.php"); // Redirecting To Home Page
}

?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <link rel="stylesheet" type="text/css" href="AmplifyPortfolio.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

            <script>  
        $(document).ready(function(){
                $("table#table_stocks").toggle();  
                $("#show").click(function(){  
                $("table#table_stocks").toggle();  
            });    
        }); 
        
        </script>  

<style>
   
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(232, 232, 238);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    z-index: 11;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #0d0333;
    display: block;
    transition: 0.3s;
}
.sidenav a:hover {
    color: #030107;
    background-color: rgb(46, 69, 196);
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#color_odd{
    background-color: rgb(49, 179, 70);
    padding: 10px;
}
#color_even{
    background-color: rgb(66, 183, 212);
    padding: 10px;
}

#tab_echo{
    border: 2px black;
}
tr:nth-child(even) {background-color: #f2f2f2;
    border:2px solid black;}
</style>

</head>
<body>

<div class="header">
  <h2 style="white-space:pre">User Portfolio&#9;<span class="glyphicon glyphicon-king glyphicon-bordered"></span></h2>
</div>
<ul id="navbar">
    <li style="float:right; white-space:pre"><a href="http://localhost/logout.php" ><span class="glyphicon glyphicon-log-out"></span>&#9;Logout</a></li>
    <li style="float:left; white-space:pre"><a href="#" onclick="openNav()"><span class="glyphicon glyphicon-menu-hamburger" ></span>&#9;Menu</a></li>
    <li style="float:left; white-space:pre"><a href="#top" >Home</a></li>
    <li style="float:left; white-space:pre"><a href="https://economictimes.indiatimes.com/" target="_blank">News</a></li>
</ul>
<div class="jumbotron" style="padding:10px;">
<div id="mySidenav" class="sidenav">
        <a href="#" onclick="closeNav()" style="float:right;">X</a>
        <div class="tab">      
          <!--<button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'portfolio')" ><span class="glyphicon glyphicon-list-alt"></span>&#9;Portfolio</button>-->
          <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'stocks')" id="defaultOpen"><span class="glyphicon glyphicon-stats"></span>&#9;Stocks
          <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'mutual_funds')"><span class="glyphicon glyphicon-signal"></span>&#9;Mutual Funds
          <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'trade_currency')"><span class="glyphicon glyphicon-bitcoin"></span>&#9;Trade Currency
          <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'watchlist')"><span class="glyphicon glyphicon-eye-open"></span>&#9;Watchlist
          <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'transaction')"><span class="glyphicon glyphicon-lock"></span>&#9;Transaction
          <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'user')"><span class="glyphicon glyphicon-user"></span>&#9;<?php echo $_SESSION['login_user'];?>
        </div>
       </div>
    </div>
    
  <div style="float:right;"><?php echo "Logged in as:".$_SESSION['login_user'];?><br><br></div>
        <table id="tabled">
        <tr>
                <th id="color_odd">Investment<br><p style="font-size:0.9em; font-weight: normal;">
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT sum(total) as Investment FROM stocks where stocks.uname='$username'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Rs.". $row["Investment"]. "/-";
                        }
                    } else {
                        echo "0";
                    }

                    mysqli_close($conn);

                    ?>
                </p></th>
                <th id="color_even">Today's Gain<br><p style="font-size:0.9em; font-weight: normal;">Data</p></th>
                <th id="color_odd">Max Gainer<br><p style="font-size:0.9em; font-weight: normal;"><?php
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT max(profit) as maxgainer FROM stocks where stocks.uname='$username'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $sql = "SELECT stocks.ssym FROM stocks where stocks.uname='$username' and stocks.profit=".$row["maxgainer"].";";
                            $result = mysqli_query($conn, $sql);
        
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "Stock Symbol:". $row["ssym"]. "<br>";
                                }
                            } else {
                                echo "0";
                            }
                            //echo "Rs.". $row["maxgainer"]. "/-<br>";
                        }
                    } else {
                        echo "0";
                    }
                   

                    mysqli_close($conn);

                    ?>
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT max(profit) as maxgainer FROM stocks where stocks.uname='$username'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Rs.". $row["maxgainer"]. "/-<br>";
                        }
                    } else {
                        echo "0";
                    }

                    mysqli_close($conn);

                    ?></p></th>
        </tr>
            <tr>
                <th id="color_even">Max Losser<br><p style="font-size:0.9em; font-weight: normal;">
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT min(profit) as maxgainer FROM stocks where stocks.uname='$username'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $sql = "SELECT stocks.ssym FROM stocks where stocks.uname='$username' and stocks.profit=".$row["maxgainer"].";";
                            $result = mysqli_query($conn, $sql);
                            //if($row["maxgainer"]<0){
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    
                                    echo "Stock Symbol:". $row["ssym"]. "<br>";
                                }
                            } else {
                                echo "0";
                            }
                            //echo "Rs.". $row["maxgainer"]. "/-<br>";
                        }
                    //}
                    } else {
                        echo "0";
                    }
                   

                    mysqli_close($conn);

                    ?>
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT min(profit) as maxgainer FROM stocks where stocks.uname='$username'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            //if($row["maxgainer"]<0){
                            echo "Rs.". $row["maxgainer"]. "/-<br>";
                        }
                    //}
                    }

                    mysqli_close($conn);

                    ?></p></th>
                <th id="color_odd">Overall Gain<br><p style="font-size:0.9em; font-weight: normal;"><?php
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT sum(profit) as maxgainer FROM stocks where stocks.uname='$username'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Rs.". $row["maxgainer"]. "/-<br>";
                        }
                    } else {
                        echo "0";
                    }

                    mysqli_close($conn);

                    ?></p></th>
                <th id="color_even">Overall Networth<br><p style="font-size:0.9em; font-weight: normal;"><?php
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT sum(total) as maxgainer FROM stocks where stocks.uname='$username'";
                    $sql1 = "SELECT sum(profit) as maxgainer1 FROM stocks where stocks.uname='$username'";
                    $result = mysqli_query($conn, $sql);
                    $result1 = mysqli_query($conn, $sql1);
                    $total=0;
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $total=$total+$row["maxgainer"];}}
                    if (mysqli_num_rows($result1) > 0) {
                                while($row = mysqli_fetch_assoc($result1)) {
                                    $total=$total+$row["maxgainer1"];}}
                            echo "Rs.". $total. "/-<br>";

                    mysqli_close($conn);

                    ?></p></th>
                </tr>
    </table>

    <!-- <div style="text-align:center">
        <div id="portfolio" class="tabcontent">
            <h3>Total Portfolio</h3>
            <div align=middle style="float:center;">
            <div id="chart-container" style="height: 700px; width: 700px;float:center;"></div>
            </div>
          </div>
           
                </div> -->
                 <div id="stocks" class="tabcontent" >
                 <br><br>
                 <h3>Total Portfolio</h3><hr>
                 <br><br>
            <div align=middle style="float:center;">
            <div id="chart-container" style="height: 500px; width: 500px;float:center;"></div>
            </div>
            <hr>
            <br><br>
                <h2 align=middle id="invest">Investments</h2>
                <hr>
    
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT * FROM stocks where stocks.uname='$username';";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                        ?>
                        <table style="padding:10px;border:2px solid black;"><tr><th style="padding:10px;background-color:black;color:white;width:15%;">Stock</th><th style="padding:10px;background-color:black;color:white;width:15%;">Qty</th><th style="padding:10px;background-color:black;color:white;width:15%;">Rate</th><th style="padding:10px;background-color:black;color:white;width:15%;">Total</th><th style="padding:10px;background-color:black;color:white;width:15%;">Profit/Loss</th><th style="padding:10px;background-color:black;color:white;width:15%;">%Change</th></tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr style="<?php 
                            if($row["profit"]>0)
                            {
                                echo "color:green;";
                            }
                            else echo "color:red;";
                            ?>"><td style="padding:0px;width:15%;"><strong><?php echo $row["ssym"];?></strong></td><td style="padding:10px;width:15%;"><strong><?php echo  $row["qty"];?></strong></td><td style="padding:10px;width:15%;"><strong><?php echo $row["rate"];?></strong></td><td style="padding:10px;width:15%;"><?php echo $row["total"];?></strong></td><td style="padding:0px;width:15%;"><strong><?php echo $row["profit"];?></strong></td><td style="padding:0px;width:15%;"><strong><?php echo $row["pper"];?></strong></td><?php
                            
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    
                    mysqli_close($conn);
                    
                    ?>  <hr>
                <br>
                <table>
                <tr><td>
                <h3>View stock</h3>
                <form name="form" action="" method="post">
                <input name="search" id="search" type="text" class="typeahead" />
                <button type="submit">Submit</button>
                </form>

                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                <span class="caret"></span></button>
                <ul class="dropdown-menu"><br>
                <span style="float:center;">
                <?php
				$stock=$_POST["search"];
                $stock='/'.$stock.'/';
                /*$stock='/IN/';*/
                $ch = fopen("NSE.csv", "r");
                while($row = fgetcsv($ch)) {
                    if (preg_match($stock, $row = implode(' | ', $row))) {
                        echo '<li>' . $row . ' </li><br>';
                    }
                }
                ?>
                </span>
                </ul>
            
            </div>
            </td>
                <td>
                <div class="jumbotron" style="width:100%;float:center;">
                <button id="show">Add/Delete</button>   
                <table id="table_stocks" style="width:500px;padding:10px;border:2px solid black;float:center;">
              <form action="insertudata.php" method="post">
               <tr style="padding:10px;"><td style="padding:10px;">Symbol:</td><td style="padding:10px;"><input type="text" name="ssym" style="width:300px;" required></td></tr>
               <tr style="padding:10px;"><td style="padding:10px;">QTY:</td><td style="padding:10px;"><input type="number" name="qty" style="width:300px;" required></td></tr>
               <tr style="padding:10px;"><td style="padding:10px;">Rate:</td><td style="padding:10px;"><input type="number" name="rate" style="width:300px;" required></td></tr>
               <tr style="padding:10px;"><td style="padding:10px;">Date:</td><td style="padding:10px;"><input type="date" name="bdate" style="width:300px;" required></td></tr>
               <tr style="padding:10px;"><td colspan=2 style="padding:10px;"><input type="submit" name="add" value="Add" style="padding:10px;width:50%;"><input type="submit" name="transactions" value="Sell" style="padding:10px;width:50%;"></tr>
              </form>
              </table>
              </div>
             </td>
             </tr>
             </table>
</div>
</div>
          <div id="mutual_funds" class="tabcontent">
            <h3>Modify Mutual funds</h3>
            <p>Mutual funds are subject to market risks. Modify Row</p> 
          </div>
          
          <div id="trade_currency" class="tabcontent">
            <h3>currency</h3>
            <p>Apna rupaiya sab pe bhari</p>
          </div>
          
          <div id="watchlist" class="tabcontent">
            <h3>Watch</h3>
            <p>Apna rupaiya sab pe bhari</p>
          </div>

          <div id="transaction" class="tabcontent">
          <br><br>
                <h2 align=middle>Buy Transactions</h2>
                <hr>
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
                        $username=$_SESSION['login_user'];
                        $sql = "SELECT ssym, qty, rate, total,bdate FROM transactionb where transactionb.uname='$username';";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                            ?>
                            <table style="padding:10px;border:2px solid black;"><tr><th style="padding:10px;background-color:black;color:white;width:18%;">Stock</th><th style="padding:10px;background-color:black;color:white;width:18%;">Qty</th><th style="padding:10px;background-color:black;color:white;width:18%;">Rate</th><th style="padding:10px;background-color:black;color:white;width:18%;">Total</th><th style="padding:10px;background-color:black;color:white;width:18%;">Buy Date</th></tr>
                        <?php
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr ><td style="padding:0px;width:18%;"><strong><?php echo $row["ssym"];?></strong></td><td style="padding:10px;width:18%;"><strong><?php echo  $row["qty"];?></strong></td><td style="padding:10px;width:18%;"><strong><?php echo $row["rate"];?></strong></td><td style="padding:10px;width:18%;"><?php echo $row["total"];?></strong></td><td style="padding:10px;width:18%;"><?php echo $row["bdate"];?></strong></td><?php
                                
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        
                        mysqli_close($conn);
                        
 ?>  <hr>
 <br><br>
                <h2 align=middle>Sell Transactions</h2>
                <hr>
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
                        $username=$_SESSION['login_user'];
                        $sql = "SELECT ssym, qty, rate, total,sdate FROM transactions where transactions.uname='$username';";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                            ?>
                            <table style="padding:10px;border:2px solid black;"><tr><th style="padding:10px;background-color:black;color:white;width:18%;">Stock</th><th style="padding:10px;background-color:black;color:white;width:18%;">Qty</th><th style="padding:10px;background-color:black;color:white;width:18%;">Rate</th><th style="padding:10px;background-color:black;color:white;width:18%;">Total</th><th style="padding:10px;background-color:black;color:white;width:18%;">Sell Date</th></tr>
                        <?php
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr ><td style="padding:0px;width:18%;"><strong><?php echo $row["ssym"];?></strong></td><td style="padding:10px;width:18%;"><strong><?php echo  $row["qty"];?></strong></td><td style="padding:10px;width:18%;"><strong><?php echo $row["rate"];?></strong></td><td style="padding:10px;width:18%;"><?php echo $row["total"];?></strong></td><td style="padding:10px;width:18%;"><?php echo $row["sdate"];?></strong></td><?php
                                
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }
                        
                        mysqli_close($conn);
                        
 ?>  <hr>
          </div>

          <div id="user" class="tabcontent">
            <br><br><h2 align=middle>User</h2>
            <hr>
                            <p> <?php 
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
                $username=$_SESSION['login_user'];
                $sql = "SELECT user.uname, user.name,user.address,user.aadhar,user.pan,user.mob,user.email,user.dob,user.pwd FROM user where user.uname='$username';";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table style="padding:10px;border:2px solid black;"><tr><th style="padding:10px;background-color:black;color:white;width:25%;">Particulars</th><th style="padding:10px;background-color:black;color:white;width:25%;">Values</th></tr>
                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr ><td style="padding:0px;width:25%;"><strong>User Name</strong></td><td style="padding:0px;width:25%;"><strong><?php echo $row["uname"];?></strong></td></tr>
                        <tr><td style="padding:10px;width:20%;"><strong>Name</strong></td><td style="padding:10px;width:20%;"><strong><?php echo  $row["name"];?></strong></td></tr>
                        <tr><td style="padding:10px;width:20%;"><strong>Address</strong></td><td style="padding:10px;width:20%;"><strong><?php echo  $row["address"];?></strong></td></tr>
                        <tr><td style="padding:10px;width:20%;"><strong>Aadhar</strong></td><td style="padding:10px;width:20%;"><strong><?php echo  $row["aadhar"];?></strong></td></tr>
                        <tr><td style="padding:10px;width:20%;"><strong>PAN</strong></td><td style="padding:10px;width:20%;"><strong><?php echo  $row["pan"];?></strong></td></tr>
                        <tr><td style="padding:10px;width:20%;"><strong>Mobile no.</strong></td><td style="padding:10px;width:20%;"><strong><?php echo  $row["mob"];?></strong></td></tr>
                        <tr><td style="padding:10px;width:20%;"><strong>Email</strong></td><td style="padding:10px;width:20%;"><strong><?php echo  $row["email"];?></strong></td></tr>
                        <tr><td style="padding:10px;width:20%;"><strong>DOB</strong></td><td style="padding:10px;width:20%;"><strong><?php echo  $row["dob"];?></strong></td></tr>
                        <tr><td style="padding:10px;width:20%;"><strong>Password</strong></td><td style="padding:10px;width:20%;"><strong><?php echo  $row["pwd"];?></strong></td></tr>
                        <?php
                        
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                
                mysqli_close($conn);
                
                ?></p>
          </div>

        </div>
    
        <div class='disclaimer' style="font-size:0.9em; font-weight: normal; float: center;" >
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                *******************************************************************************<br>
                Copyright © 2018. Everything done by Rahil,Mukund and Rohit.<br>
                *******************************************************************************
            </div>
            
    <form  id="sampleForm" name="sampleForm" method="post" action="inputcurrprice.php">
    <input type="hidden" name="ssym" >
    <input type="hidden" name="rate">
    <a href="#" onclick="setValue();"></a>
</form>
    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
function opensecurity(evt, securityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(securityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
            </script>
            
    <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chart-container", {
	exportEnabled: true,
	animationEnabled: true,
	//title:{
	//	text: "State Operating Funds"
	//},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}%</strong>",
		indexLabel: "{name} - {y}%",
		dataPoints: [
			//{ y: 75, name: "Stocks", exploded: true },
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
                    $username=$_SESSION['login_user'];
                    $sql = "SELECT sum(total) as Investment FROM stocks where stocks.uname='$username'";
                    $result = mysqli_query($conn, $sql);
                    $total;
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                           $total= $row["Investment"];
                        }
                    } else {
                        echo "0";
                    }
                    $sql = "SELECT ssym,total FROM stocks where stocks.uname='$username'";
                    $result1 = mysqli_query($conn, $sql);
                    $perport;
                    if (mysqli_num_rows($result1) > 0) {
                        while($row = mysqli_fetch_assoc($result1)) {
                           $perport=($row["total"]/$total)*100;
                           echo "{ y: ".$perport.", name: \"".$row["ssym"]."\" },";
                        }
                    } else {
                        echo "0";
                    }
                    mysqli_close($conn);

                    ?>
			// { y: 20, name: "Mutual fund" },
			// { y: 5, name: "Currency" },
		]
	}]
});
chart.render();
}

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded)
	{
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();
}
</script>       
 <script type = "text/javascript">     
    $(document).ready(function() { 
       setInterval(displayPrice); 
      });  
      var request = new XMLHttpRequest();  
      var count = 0;   
      request.open("GET", "https://www.alphavantage.co/query?function=BATCH_STOCK_QUOTES&symbols=INFY,AAP&apikey=MUPL9IQMVVNXK8FS");   
          request.responseText = "json";   
          var obj; 
          request.onload = function() {    
              obj = JSON.parse(request.response);  
              var str = "stock";   
              for(var i = 0; i < 2; ++i)   
              {    
             document.getElementById(str + i.toString()).innerHTML ="<span class = 'col-xs-6'>" + obj["Stock Quotes"][i]["1. symbol"] + "</span>" + "<span class = 'col-xs-6'>" + obj["Stock Quotes"][i]["2. price"] + "</span>";  
                var ssymb= $('obj["Stock Quotes"][i]["1. symbol"]').val(); 
                var currprice=$('obj["Stock Quotes"][i]["2. price"]').val();   
                /*var ssymb= 'INFY';   
                var currprice=100;*/   
                $.post(inputcurrprice.php,{postssymb:ssymb,postcurrprice:currprice},   
                printf("End of file\n");   
                function(){    
                    $('#result').html(data);   
                });    
                   
              }    
              ++count; 
          };   
          request.send();  
           
</script>  
<?php 
                echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>";
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

                $querySym = "SELECT distinct ssym from stocks;";

                $sym = mysqli_query($conn, $querySym);
                $symString = "";
                if (mysqli_num_rows($sym) > 0) {
                    while($row = mysqli_fetch_assoc($sym)) {
                        $symString = $symString.$row['ssym'].",";
                    }
                    $list = substr_replace($symString, "", -1);
                }
                
                $url = "https://www.alphavantage.co/query?function=BATCH_STOCK_QUOTES&symbols=".$list."&apikey=2ELJ1YAXPWWUKSIH";

                //echo $url;
                    ?>
                <script type = "text/javascript">     
                
                  var request = new XMLHttpRequest();  
                  var count = 0;   
                  request.open("GET", "<?php echo $url;?>");   
                      request.responseText = "json";   
                      var obj; 
                      request.onload = function() {    
                          var json = JSON.parse(request.response);  
                          console.log(json);
                          var i=1;
                          for(i=0;i<json["Stock Quotes"].length;i++){
                          console.log(json["Stock Quotes"][i]["1. symbol"]);
                          var ssym = json["Stock Quotes"][i]["1. symbol"];
                          console.log(json["Stock Quotes"][i]["2. price"]);
                          var rate= json["Stock Quotes"][i]["2. price"];
                          document.sampleForm.ssym.value = ssym;
                          document.sampleForm.rate.value = rate;
                          setTimeout(function setValue(){
                        //     console.log(json["Stock Quotes"][i]["1. symbol"]);
                        //   var ssym = json["Stock Quotes"][i]["1. symbol"];
                        //   console.log(json["Stock Quotes"][i]["2. price"]);
                        //   var rate= json["Stock Quotes"][i]["2. price"];
                                    document.sampleForm.ssym.value = ssym;
                                    document.sampleForm.rate.value = rate;
                                    document.forms["sampleForm"].submit();
                                    
                                        
                          },1000000); 
                        }



                            // function myLoop () {           //  create a loop function
                            // setTimeout(function () {    //  call a 3s setTimeout when the loop is called
                            //     //alert('hello'); 
                            //     console.log(json["Stock Quotes"][i]["1. symbol"]);
                            //     var ssym = json["Stock Quotes"][i]["1. symbol"];
                            //     console.log(json["Stock Quotes"][i]["2. price"]);
                            //     var rate= json["Stock Quotes"][i]["2. price"];    
                            //     document.sampleForm.ssym.value = ssym;
                            //     document.sampleForm.rate.value = rate;
                            //     document.forms["sampleForm"].submit();
                            //              //  your code here
                            //     i++;                     //  increment the counter
                            //     if (i < json["Stock Quotes"].length) {            //  if the counter < 10, call the loop function
                            //         myLoop();             //  ..  again which will trigger another 
                            //     }                        //  ..  setTimeout()
                            // }, 5000)
                            // }

                            // myLoop();



                            
                            //var i = 0, howManyTimes = json["Stock Quotes"].length;
                            // for(var i=0;i<json["Stock Quotes"].length;i++){
                            // function f() {
                            //     console.log(json["Stock Quotes"][i]["1. symbol"]);
                            //     var ssym = json["Stock Quotes"][i]["1. symbol"];
                            //     console.log(json["Stock Quotes"][i]["2. price"]);
                            //     var rate= json["Stock Quotes"][i]["2. price"]; 
                                   
                            //     document.sampleForm.ssym.value = ssym;
                            //     document.sampleForm.rate.value = rate;
                            //     document.forms["sampleForm"].submit();
                            //     if( i < json["Stock Quotes"].length ){
                                    
                            //         setTimeout( f, 18000 );
                            //     }
                            // }
                            // f();
                            // }
                          ++count; 
                      };   
                      request.send();  
                       
            </script> 
</body>
</html>
