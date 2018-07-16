<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="AmplifyPortfolio.css">
    <script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</head>
<body>

<div class="header">
  <h2 style="white-space:pre">Portfolio king&#9;<span class="glyphicon glyphicon-king glyphicon-bordered"></span></h2>
</div>
<ul id="navbar">
    <!--<li style="float:left; color:white;"><strong>Portfolio Manager</strong></li>-->
    <li style="float:right"><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <li><a href="#contact">Contact</a></li>
    <li ><a class="active" href="#top">Home</a></li>
    <li ><a href="https://economictimes.indiatimes.com/" target="_blank">News</a></li>
</ul>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="http://www.smartserve.co/wp-content/uploads/2018/03/portfolio-stock-1080x675.jpg" alt="Image"  height="500">
            <div class="carousel-caption">
              <h3>Easy to use</h3>
              <p style="color:royalblue">We offer a easy to use site with all the features you need</p>
            </div>      
          </div>
    
          <div class="item">
            <img src="images/main.jpg" alt="Image" height="500">
            <div class="carousel-caption">
                <br><br>
                <h3>Easy to use</h3>
                <p style="color:royalblue">We offer a easy to use site with all the features you need</p>
            </div>      
          </div>
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
	</div>
	
    <div class="container text-center">    
            <h3 style="text-align: left"><strong>What We Do</strong></h3><br>
            <div class="row">
              <div class="col-sm-4">
                  <div class="jumbotron" style="height: 310px;"><p>Real Time Price Updates
                  </p>
                <p style="font-size: 14px">
                   Stock price get updated in real time during trading hours so you are updated on your day's profit and loss.
                  <br>Stock price get updated in real time during trading hours so you are updated on your day's profit and loss.
                <br>
                Stock price get updated in real time during trading hours so you are updated on your day's profit and loss.</p>
              </div>
              </div>
              <div class="col-sm-4"> 
                  <div class="jumbotron" style="height: 310px;"><p>
                  Financial Goal</p>
                <p style="font-size: 14px">
                  
                    Plan your retirement, children's education, or your real estate needs andÂ link it to your portfolio for tracking your goals.
					<!--<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>-->
                </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="well">
                        <p style="font-size: 16px">
                          Watch List<br>
                          Create & share custom watch list from a choice of multiple financial parameters for buy/sell decisions for your portfolio.</p>

                </div>
                <div class="well">
                        <p style="font-size: 16px">
                          Real Time Reports<br>
                          Track you investment via real time reports on transactions, capital gains, dividend income & corporate actions.
                          
                          </p>
                </div>
              </div>
            </div>
          </div><br>
    <div class="container text-center">    
        <h3 style="text-align: left"><strong>What We Do</strong></h3><br>
        <div class="row">
            <div class="col-sm-6">
            <img src="images/nepse-forum.png" class="img-responsive" style="width:100%; height:330px" alt="Image">
            <p>Current Project</p>
            </div>
            <div class="col-sm-6"> 
            <img src="images/stock-featured.jpg" class="img-responsive" style="width:100%; height:330px" alt="Image">
            <p>Project 2</p>    
            </div>
        </div> Plan your retirement, children's education, or your real estate needs andÂ link it to your portfolio for tracking your goals. 
        </div><br>
        
        <div class="container" align="center">    
        <h3 style="text-align: left"><strong>Current investment of Portfolio</strong></h3><br>
        <!--div id="container" style="height: 300px; width: 100%;"></div-->
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </div><br>
        

<!--Login popup-->    
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container">
          <h1>Login to Your Account</h1><br>
          <form action="http://localhost/login.php" method="post">
          <input type="text" name="uname" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <input type="submit" name="login" class="login loginmodal-submit" value="Login">
          </form>
          
          <div class="login-help">
            <a href="#" data-toggle="modal" data-target="#signup-modal"><h5>Register</h5></a>
          </div>
        </div>
    </div>
</div>

<!--Signup popup-->    
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="loginmodal-container".
>
        <h3>Create Your Account</h3><br>
        <form action="insertuser.php" method="post">
        <input type="text" name="uname" placeholder="Create Username" required="required">
        <input type="text" name="name" placeholder="Your Name" required="required">
        <input type="text" name="address" placeholder="Address" required="required">
        <input type="text" name="aadhar" placeholder="Aadhar card no." required="required">
        <input type="text" name="pan" placeholder="Pan card no." required="required">
        <input type="text" name="mob" placeholder="Mobile no." required="required">
        <input type="email" name="email" placeholder="Email address" required="required">
        <input type="date" name="dob" placeholder="Enter your birthday" required="required">
        <input type="password" name="pwd" placeholder="Create a Password" required="required">
        <input type="submit" name="register" class="login loginmodal-submit" value="Register">
        </form>
    </div>
    </div>
    </div>
 
    <footer>
        <div class="jumbotron" style="margin-top:80px" id="contact">
            <div style = "color:rgb(46, 69, 196); font-weight:bolder; "><u>Contact Us</u>
                <!-- <span class="dash" style="width:20px;border:5px solid rgb(46, 69, 196)" ></span>-->
            </div><br>
            <div class="row">
                    <div class="col-md-4">
                        <div class="alert alert-info col-centered" >
                            <div class="glyphicon-ring glyphicon-teal" style="align-items: center"> <span class="glyphicon glyphicon-briefcase glyphicon-bordered"></span>
                            </div><br>
                            <u><h3>Address</h3></u>
                            <div id="map" style="width:365px;height:300px;background:white"></div>
                            <p style="color:black; font-size: 15px; ">Bharatiya Vidya Bhavan's
                                Sardar Patel Institute of Technology,
                                Bhavans Campus, Munshi Nagar, 
                                Andheri (West), Mumbai,
                                Maharashtra 400058.
                            </p>
                        </div>
                       </div>
                        <div class="col-md-4">
                            <div class="alert alert-info col-centered">
                                <!--<div class="glyphicon-ring glyphicon-teal"> <span class="glyphicon glyphicon-user glyphicon-bordered"></span>
                                </div>--><br>
                                <u><h3>Team Leaders</h3></u>
                                <img   class="prof" src="images/Rahil.JPG" alt="Avatar" style="width:100px; height: 100px;">
                                <p style="color:black; font-size: 15px; "><strong>Rahil</strong><br>
                                  Rahil is a great programmer and an avid thinker<br>
                                  <img   class="prof" src="images/Mukund.jpg" alt="Avatar" style="width:100px; height: 100px;">
                                <p style="color:black; font-size: 15px; "><strong>Mukund</strong><br>
                                  Mukund is a person of great values and Extraordinary ideas<br>
                                  <img   class="prof" src="images/Rohit.jpg" alt="Avatar" style="width:100px; height: 100px;">
                                <p style="color:black; font-size: 15px; "><strong>Rohit</strong><br>
                                  Rohit is very persistent in his work and is the most hardworking of the co founders<br>
                                </p>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="alert alert-info col-centered">
                                <!--<div class="glyphicon-ring glyphicon-teal"> <span class="glyphicon glyphicon-phone-alt glyphicon-bordered"></span>
                                </div>--><br>
                                <u><strong><h3>Get in touch</h3></strong></u><br><br>
                                <span class="glyphicon glyphicon-envelope">&#9;<strong>portfolioking@spit.ac.in</strong></span><br><br><br>
                                <span class="glyphicon glyphicon-phone">&#9;<strong>022-87654321</strong></span><br><br><br>
                                <span class="glyphicon glyphicon-comment">&#9;<a href="mailto:mukund.0608@gmail.com?subject=Reason%20To%20Contact%20Amplify%20Portfolio%20" target="_blank"><strong>Leave a comment</strong></a></span><br><br>
                                
                                </p>
                            </div>
                        </div>
           </div>       
        </div>
    </footer>
    

    <script>
        function myMap() {
          var mapCanvas = document.getElementById("map");
          var myCenter = new google.maps.LatLng(19.1231971,72.836133); 
          var mapOptions = {center: myCenter, zoom: 17};
          var map = new google.maps.Map(mapCanvas,mapOptions);
          var marker = new google.maps.Marker({
            position: myCenter,
            animation: google.maps.Animation.BOUNCE
          });
          marker.setMap(map);
        }
 </script>       
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ8k5YV_dl3_c4EmjRiiYRQ4H22BPFvFk&callback=myMap" type="text/javascript">
</script>
	
	<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
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
