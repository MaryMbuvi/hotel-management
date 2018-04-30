
	<?php include('serverDoc.php') ?>
	<?php include('serverPatient.php') ?>
	<?php include('rate.php') ?>
	<?php include('errors.php') ?>
	
<!DOCTYPE html>
<html>
<head>


<!--  -->
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href="css/animate.min.css" rel="stylesheet">
   	<link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="js/bootstrap-dropdownhover.min.js"></script>

	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
</head>



</head>

<body style="background-color:	#be9b7b;margin:auto">

	

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

	<div class="container-fluid">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand"> <img src="Capture.png" id="logo" style="margin-left: 20%;">Afyaboramedical@go.ke</a>
		</div>
		<div class="navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="Index.php">Home</a></li>
			<li><a href="About.php">About Us</a></li>
			<li><a href="Testimonials.php">Testimonial</a></li>
			<li><a href="Contact.php">Contact</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="fadeInDown">Services
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">In-Patient</a></li>	
				<li><a href="#">Out-Patient</a></li>
				
				
			</ul>
			</li>
		</ul>
				<div id="header1">
	<h1>AFYA BORA MEDICAL CENTER</h1>
</div>
	</div>
	</div>
</nav>


        	
        	<style type="text/css">
        	a {
    color: #ffffff !important;
    text-decoration: none !important;
}
a:link, a:visited {
    color: #d3c490 !important;

}
a:hover {
    color: #f9fafc !important;

}
a img:hover{ position: relative; 
             /*top: -5px;*/}

ul.dropdown-menu {
    background-color: #2d0c08;
}

        		#header1{
        			font-family: Promesh;
        			color: #ffffff;
        			margin-top: 35px;
       				width: 100%;
       				background: #2d0c08;
        		}

        		.navbar {
        			background: #2d0c08 !important;
        			text-align: center !important;
        		}

        		.navbar-collapse {
        			text-align: center !important;
        		
        		}
        		.navbar-nav {
				    display:inline-block;
				    float:none;
				}
				 footer {
				 	font-family: Georgia,Serif;
				 	font-size: 20px;
				 }   
				 h1{
				 	
				 	color: #ffffff;
				 	margin-left: 15%;
				 	font-family: Stencil;
				 }    

				 #logo{
				 	width: 100px;
				 	height: 100px;
				 }		
				 h2{
				 	color: #0800a2 !important;
				 	font-family: calibri;
				 	text-align: center;
				 }
			#sticky-social {    left: 0;    position: fixed;    top: 150px; } 
			to:
			#sticky-social {
			left: 0;
			position: fixed;
			top: 150px;
			z-index: 10;
			}

		.fa {
  padding-top: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 0;
  border-radius: 50%;

}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-yahoo {
  background: #430297;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}


.fa:hover {
    opacity: 0.7;
}
p{
	font-size: 20px;
	font-family: Calibri;
	color: #000;
}
input{

}
footer{
	position: fixed-bottom;
	

}
#header2{
	text-align: center;
	font-size: 24px;
	font-family: arial black;
}


	</style>

	<div class="container-fluid">
		<div class="col-md-11" style="margin-top: 150px; margin-left: 5%;">
		 <div class="carousel slide" id="carousel1" data-ride="carousel">
        	<div id="header2">
	<a href="signUp.php">SignUp now..!</a>
</div>
        	<ol class="carousel-indicators">
        		<li data-target="#carousel1" data-slide-to="0" class="active"></li> 
        		<li data-target="#carousel1" data-slide-to="1"></li>
        		<li data-target="#carousel1" data-slide-to="2"></li>
        		<li data-target="#carousel1" data-slide-to="3"></li>	

        	</ol>  

			<div class="carousel-inner">
				<div class="item active">
					<img src="hospitals/1.jpg" style="width:100%; height:350px";>
				</div>
				<div class="item">
					<img src="hospitals/5.jpg" style="width:100%; height:350px";>
				</div>
				<div class="item">
					<img src="hospitals/3.jpg" style="width:100%; height:350px";>
				</div>
				<div class="item">
					<img src="hospitals/4.jpg" style="width:100%; height:350px";>
				</div>
			</div>
		
			<a href="#carousel1" class="left carousel-control" data-slide="prev">
        		<span class="glyphicon glyphicon-chevron-left">
        			<span class="sr-only">Previous</span>
        		</span>
        	</a>  	
        	<a href="#carousel1" class="right carousel-control" data-slide="next">
        		<span class="glyphicon glyphicon-chevron-right"></span>
        		<span class="sr-only">Next</span>
        	</a>
        </div>
	</div>

	<div class="col-md-12">
		<div class="col-md-7" style="margin-left: 3%; margin-top: 10px; padding: 20px;">
			<div class="btnbtn-group " style=" margin-left: 5%;">
			<button type="button" class="btn btn-primary" style="width: 250px;" data-toggle="modal" data-target="#doctor">Click to Log in as a Doctor</button>
			<button type="button" class="btn btn-primary" style="width: 250px;" data-toggle="modal" data-target="#patient">Click to Log in as Patient</button>
		</div>
		

			<div class="modal fade" id="doctor">
				<div class="modal-dialog">
		      <div class="modal-content">
		        <!-- header -->

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>				
					<h3 class="modal-title">Doctors' Login</h3>
				</div>
				<div class="modal-body">
					
						<form role="form" class="form-horizontal" method="POST" action="serverDoc.php">
							<?php include('errors.php') ?>
							<label>Employee number:</label>
							<input type="text" name="employeeNo" required="" class="form-control"><br>
							
							<label>Password</label>
							<input type="Password" name="password" placeholder="********" class="form-control"><br>
							<button class="btn btn-block btn-info" name="btnDoc">Sign in</button><br>
						</form>
						
				</div>
				<div class="modal-footer">
					<p class="danger"><b>New to Afya Bora?</b>
					<a href="signUp.php" class="btn btn-primary">Click to Sign-up</a> </p>
					</div>
				</div>
				</div>
				
			</div>

			<div class="modal fade" id="patient">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h3>Patient's Login</h3>
						</div>
						<div class="modal-body">
							<form class="form form-horizontal" method="POST" action="serverPatient.php">
								<?php include('errors.php') ?>
							<label>User name:</label>
							<input type="text" name="uname" required="" class="form-control"><br>
							
							<label>Password:</label>
							<input type="Password" name="password" required="" placeholder="**********" class="form-control"> <br>

							
							<button class="btn btn-block btn-info" name="btnPatient">Sign in</button>
						</form>
						</div>
						<div class="modal-footer">
					<p class="danger"><b>New to Afya Bora?</b>
					<a href="signUp.php" class="btn btn-primary">Click to Sign-up</a> </p>
					</div>
					</div>
					
				</div>
			</div>

			<a href="#About"><h2>About Afya Bora</h2></a>
			<p>Afya Bora Medical center is a general hospital started first in 1945 by the Late 
			Charles Lwanda from Sowuth Africa. The hospital started as a red cross team that aided
			ailing people around the village at that time which was known as Kingi, present day (Matiba centre).
			According to Charles, the hospital was set up there because visit was the central place for the surrounding villages.
			They first used tents as the small rooms for medical attetion and surgeries. However, after independence, Charles
			won a medal for being the most compassionate. The health facility was funded by the government in 1968, where new structures were developed.</p>
			<hr>
			<a href="#About"><h2>Meet our Full-Time Doctors</h2></a>
			<div class="row">
			<div class="col-md-2">
				<img src="doctors/1.jpg" class=" img-circle" style="width:150px; height: 150px;">
				<p style="font-size: 15px;">Dr. Martin</p>
			</div>
			<div class="col-md-2 col-md-offset-2">
				<img src="doctors/2.jpg" class=" img-circle" style="width:150px; height: 150px;">
				<p style="font-size: 15px;">Dr. Gufield</p>
			</div>
			<div class="col-md-2 col-md-offset-2">
				<img src="doctors/3.jpg" class="img-circle" style="width:150px; height: 150px;">
				<p style="font-size: 15px;">Dr. Rymond</p>
			</div></div>
			<div class="row">
				<div class="col-md-2">
					<img src="doctors/5.jpg" class="img-circle" style="width: 150px; height: 150px;">
					<p style="font-size: 15px;">Dr. Raven</p>
				</div>
			<div class="col-md-2 col-md-offset-2">
				<img src="doctors/4.jpg" class="img-circle" style="width:150px; height: 150px;">
				<p style="font-size: 15px;">Surgical department</p>
			</div></div><hr>


				
				
			<div class="" style="background-color: #b89d74;">
				<h2>Our Mission</h2>
				<p>To excel at providing for the healthcare needs of our region through quality, efficient and
patient-centered care, balancing the continued commitment to the care of the poor and those in most need of the provision of highly specialized services,  and building a work environment where each person is valued, respected and has an opportunity for personal and professional growth.</p><br>
				<h2>Our Vision</h2>
				<p>To be a prominent community member known for meeting the healthcare needs of the entire
			community through incomparable patient care and wellness programs and lead the world as a health team by exceeding customers expectations.</p>
			</div>

		</div>
		<div class="col-md-4 col-md-offset-8" style="margin-left: 2%; background-color:#bfb293; margin-top: 10px; padding: 20px;">
			<a href="#Technology"><h2>Technology in the field of Medicine</h2></a>
			<p>At Afya Bora We can remotely and continuously monitor each heartbeat, moment-to-moment blood pressure readings, the rate and depth of breathing, body temperature, oxygen concentration in the blood, glucose, brain waves, activity, mood: all the things that make us tick. For the first time, we can digitize humans.</p>
			<hr>
			<h2>Visiting Hours</h2>
			<marquee direction="up" behavior="scroll" scrolldelay="400" height="200" Scrollamount="10">
				<p style="text-align: center;">
			Monday : 8:00a.m. - 5:30p.m.<br>
			Tuesday : 8:00a.m. - 5:30p.m.<br>
			Wednesday : 8:00a.m. - 5:30p.m.<br>
			Thursday : 8:00a.m. - 5:30p.m.<br>
			Friday : 8:00a.m. - 3:30p.m.<br>
			Saturday : 8:00a.m.- 12:30p.m.<br>
				</p></marquee><hr>

				<h2>Upcoming Events</h2>
				
				<table class="table table-bordered table-striped">
					<tr>
						<th>Day</th>
						<th>Event</th>
					</tr>
					<tr>
						<td>2nd March 2018</td>
						<td>Blood Donations at High-schools around Nairobi county</td>
					</tr>
					<tr>
						<td>15th June 2018</td>
						<td>Doctors' Conference at Vila Rosa</td>
					</tr>
					<tr>
						<td>22nd September 2018</td>
						<td>Internal Staff A.G.M</td>
					</tr>
					<tr>
						<td>1st December 2018</td>
						<td>World'd AIDS day</td>
					</tr>
				</table>
				<hr>
				<h2>Rate us today</h2>
				<form class="form" method="POST" action="rate.php" id="rate">
				<table class="table table-striped">
					<tr>
						<th></th>
						<th>Poor</th>
						<th>Average</th>
						<th>Good</th>
						<th>Excellent</th>
					</tr>
					<tr>
						<th>Timeliness</th>
						<td><input type="radio" name="Timeliness" value="poor"></td>
						<td><input type="radio" name="Timeliness" value="average"></td>
						<td><input type="radio" name="Timeliness" value="good"></td>
						<td><input type="radio" name="Timeliness" value="excellent"></td>
					</tr>

				<tr>	
					<th>Quality of Service</th>
						<td><input type="radio" name="Quality" value="poor"></td>
						<td><input type="radio" name="Quality" value="average"></td>
						<td><input type="radio" name="Quality" value="good"></td>
						<td><input type="radio" name="Quality" value="excellent"></td>
				</tr>

				<tr>	
						<th>Courtesy of Staff</th>
						<td><input type="radio" name="Courtesy" value="poor"></td>
						<td><input type="radio" name="Courtesy" value="average"></td>
						<td><input type="radio" name="Courtesy" value="good"></td>
						<td><input type="radio" name="Courtesy" value="excellent"></td>
				</tr>

				</table>
				<input type="submit" name="submitRate" value="Submit Rates" class="btn btn-block btn-primary">
				</form>
		</div>
	</div>

	<div id="sticky-social" class="sidenav">
		<div id="arrow" class="pull-bottom icon-chevron-bottom">
		<a href="#facebook" class="btn btn-social btn-facebook " data-toggle="tooltip" data-placement="top" title="facebook">
			<i class="fa fa-facebook fa-arrow-down fa-2x" style="font-size:40px; margin-left: 1%"></i></a>
			</div>
			<div id="arrow" class="pull-bottom icon-chevron-bottom">
		<a href="#twitter" class="btn btn-social btn-twitter"  data-toggle="tooltip" data-placement="top" title="twitter">
			<i class="fa fa-twitter" style="font-size:30px;"></i></a>
			</div>
			<div id="arrow" class="pull-bottom icon-chevron-bottom">
		<a href="#instagram" class="btn btn-social btn-instagram" data-toggle="tooltip" data-placement="top" title="instagram">
			<i class="fa fa-instagram" style="font-size:30px;"></i></a>
			</div>
			<div id="arrow" class="pull-bottom icon-chevron-bottom">
		<a href="#yahoo" class="btn btn-social btn-yahoo" data-toggle="tooltip" data-placement="top" title="yahoo">
			<i class="fa fa-yahoo" style="font-size:30px;"></i></a>
	</div>

</div>



<footer class="footer fixed-bottom">
	<div class="col-md-12" style="width: 100%; background-color: #2d0c08;  margin-top:5px">
	
	<div class="col-md-6"><p style="color: #ffffff">
		&copy; 2018<br>
		Afya Bora Hospital</p></div>
		<div class="col-md-5 col-md-offset-6" style="margin-left: 2%;"><p style="color: #ffffff">Call us on: 0705 874 569<br> 
		or Email us now at: Afyaboramedical@go.ke</p>
	</div>
	</div></footer>

	</div>

</body>
</html>