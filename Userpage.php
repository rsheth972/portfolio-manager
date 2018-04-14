
<!DOCTYPE html>
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
</style>
</head>
<body>

<div class="header">
  <h2 style="white-space:pre">User Portfolio&#9;<span class="glyphicon glyphicon-king glyphicon-bordered"></span></h2>
</div>
<ul id="navbar">
    <!--<li style="float:left; color:white;"><strong>Portfolio Manager</strong></li>-->
    <li style="float:right; white-space:pre"><a href="Homepage.html" ><span class="glyphicon glyphicon-log-out"></span>&#9;Logout</a></li>
    <li style="float:left; white-space:pre"><a href="#" onclick="openNav()"><span class="glyphicon glyphicon-menu-hamburger" ></span>&#9;Menu</a></li>
    <li style="float:left; white-space:pre"><a href="#top" >Home</a></li>
    <li style="float:left; white-space:pre"><a href="https://economictimes.indiatimes.com/" target="_blank">News</a></li>
    <!--li style="float:left; white-space:pre"><a href="#" >Settings</a></li-->
</ul>
<div class="jumbotron" style="padding:10px;">
<div id="mySidenav" class="sidenav">
        <a href="#" onclick="closeNav()" style="float:right; ">&times;</a>
        <div class="tab">    
            <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'portfolio')" id="defaultOpen"><span class="glyphicon glyphicon-list-alt"></span>&#9;Portfolio</button>
        <div class="dropdown">
            <button class="btn btn-primary btn-lg dropdown-toggle" type="button" style="width: 94.5%; margin: 5px;" data-toggle="dropdown" style="width: 100%">Stocks
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" class="tablinks" onclick="opensecurity(event, 'modify_stock')"><span class="glyphicon glyphicon-pencil"></span>&#9;Modify</a></li>
              <li> <a href="#" class="tablinks" onclick="opensecurity(event, 'view_stock')"><span class="glyphicon glyphicon-stats"></span>&#9;View</a></li>
            </ul>
          </div>
        <div class="dropdown">
            <button class="btn btn-primary btn-lg dropdown-toggle" type="button" style="width: 94.5%; margin: 5px;" data-toggle="dropdown">Mutual Funds
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" class="tablinks" onclick="opensecurity(event, 'modify_mutualfunds')"><span class="glyphicon glyphicon-pencil"></span>&#9;Modify</a></li>
              <li><a href="#" class="tablinks" onclick="opensecurity(event, 'view_mutualfunds')"><span class="glyphicon glyphicon-stats"></span>&#9;View</a></li>
            </ul>
          </div>
          <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'trade_currency')"><span class="glyphicon glyphicon-bitcoin"></span>&#9;Trade Currency
          <button class="btn btn-primary btn-lg tablinks" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'watchlist')"><span class="glyphicon glyphicon-eye-open"></span>&#9;Watchlist
          <button class="btn btn-primary btn-lg" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'transaction')"><span class="glyphicon glyphicon-lock"></span>&#9;Transaction
          <button class="btn btn-primary btn-lg" type="button"  style="width: 94.5%; margin: 5px;" onclick="opensecurity(event, 'user')"><span class="glyphicon glyphicon-user"></span>&#9;User
        </div>
       </div>
    </div>
    
  
        <table id="tabled">
        <tr>
                <th id="color_odd">Investment<br><p style="font-size:0.9em; font-weight: normal;">Data</p></th>
                <th id="color_even">Today's Gain<br><p style="font-size:0.9em; font-weight: normal;">Data</p></th>
                <th id="color_odd">Max Gainer<br><p style="font-size:0.9em; font-weight: normal;">Data</p></th>
        </tr>
            <tr>
                <th id="color_even">Max Losser<br><p style="font-size:0.9em; font-weight: normal;">Data</p></th>
                <th id="color_odd">Overall Gain<br><p style="font-size:0.9em; font-weight: normal;">Data</p></th>
                <th id="color_even">Overall Networth<br><p style="font-size:0.9em; font-weight: normal;">Data</p></th>
                </tr>
    </table>

        <div style="text-align:center">
        
        <div id="portfolio" class="tabcontent">
            <h3>Total Portfolio</h3>
            <div id="chart-container" style="height: 500px; width: 100%;"></div>
          </div>
        
        <div id="modify_stock" class="tabcontent">
            <h3>Modify stock</h3>
            <p>Modify Table/Row</p>
          </div>
          
          <div id="view_stock" class="tabcontent">
                <h3>View stock</h3>
                <p>View Table</p>
              </div>

          <div id="modify_mutualfunds" class="tabcontent">
            <h3>Modify Mutual funds</h3>
            <p>Mutual funds are subject to market risks. Modify Row</p> 
          </div>
          
          <div id="view_mutualfunds" class="tabcontent">
                <h3>View MF</h3>
                <p>View Table</p>
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
            <h3>History</h3>
            <p>Apna rupaiya sab pe bhari</p>
          </div>

          <div id="user" class="tabcontent">
            <h3>User</h3>
            <p>Apna rupaiya sab pe bhari</p>
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
			{ y: 75, name: "Stocks", exploded: true },
			{ y: 20, name: "Mutual fund" },
			{ y: 5, name: "Currency" },
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
            
</body>
</html>
