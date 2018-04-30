

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #bba591">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

	<div class="container-fluid">
		<div class="navbar-header">
			<a href="Index.php" class="navbar-brand"> <img src="Capture.png" id="logo" style="margin-left: 20%;">Afyaboramedical@go.ke</a>
		</div>
		<div class="navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="Index.php">Home</a></li>
			<li><a href="About.php">About Us</a></li>
			<li><a href="Testimonials.php">TESTIMONIAL</a></li>
			<li><a href="Contact.php">CONTACT</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="fadeInDown">SERVICES
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

				 #labelgender{

				 }
				</style>


	<div class="col-md-12" id="firstDiv">
			
		<div class="col-md-6" id="myForm">
			<center><img src="doctors/1.jpg"></center>
			<fieldset style="width: 90%; margin-left: 10%; margin-top: 10px; border-radius: 25%;">
				<legend id="legendDoc"><p style="color: #2d0c08; text-align: center; font-family: stencil; margin-top: 10px">Register as a Doctor</p></legend>
				<form role="form" action="serverDoc.php" method="POST" id="formDoc">
					
					<div class="input-group">
					<label>First name:</label><br>
					<input type="name" name="fname" placeholder="First name" required="" class="form-control">
						<span class="input-group-addon"></span>
					<label>Last name:</label><br>
					<input type="name" name="lname" placeholder="Last name" required="" class="form-control">
				</div>

					<label id="label">User name:</label><span class="glyphicon glyphicon-user"></span><br>
					<input type="text" name="uname" placeholder="Choose user name" required="" class="form-control" id="input"><br>

					<label id="label">Phone:</label><span class="glyphicon glyphicon-phone"></span><br>
					<input type="number" name="phone" placeholder="+254 " required="" id="input" class="form-control"><br>
					
					<label id="label">Email Address</label><span class="glyphicon glyphicon-envelope"></span><br>
					<input type="Email" name="email" required="" placeholder="eg. james@gmail.com" class="form-control" id="input"><br>

					<label id="label">Gender:</label><br>					
					<label class="radio-inline" style="margin-left: 3%"><input type="radio" name="gender" value="male">Male</label>					
					<label class="radio-inline" style="margin-left: 3%"><input type="radio" name="gender" value="female">Female</label>

					<label class="radio-inline" style="margin-left: 4%"><input type="radio" name="gender" value="other">Other</label><br><br>
					
					<label id="label">Employee No.</label>
					<input type="text" name="employeeNo" placeholder="employee number" required="" class="form-control" id="input">

					<label id="label">Password</label><span class="glyphicon glyphicon-lock"></span><br>
					<input type="Password" name="password" class="form-control" required="" id="input"><br>
					<label id="label">Confirm Password</label><br>
					<input type="Password" name="confirmPword" class="form-control" id="input"><br>

				
					<button class="btn btn-primary btn-block" name="btnRegDoc">Next</button>
				</form>
			</fieldset>
		</div>

		<div class="col-md-5 col-md-offset-6" id="secondDiv">
			<center><img src="hospitals/4.jpg"></center>
			<fieldset style="width: 100%; margin-top: 10px; border-radius: 25%;">
				<legend id="legendPat"><p style="color: #2d0c08; text-align: center; font-family: stencil; margin-top: 10px">Register as a Patient</p></legend>
				<form role="form" action="serverPatient.php" method="POST" id="formPat">
					<div class="input-group">
					<label>First name:</label><br>
					<input type="name" name="fname" placeholder="First name" required="" class="form-control">
						<span class="input-group-addon"></span>
					<label>Last name:</label><br>
					<input type="name" name="lname" placeholder="Last name" required="" class="form-control">
				</div>

					<label id="label">User name:</label><span class="glyphicon glyphicon-user"></span><br>
					<input type="text" name="uname" placeholder="Choose user name" required="" class="form-control" id="input"><br>

					<label id="label">Phone:</label><span class="glyphicon glyphicon-phone"></span><br>
					<input type="number" name="phone" placeholder="+254 " required="" class="form-control" id="input"><br>

					<label id="label">Email Address</label><span class="glyphicon glyphicon-envelope"></span><br>
					<input type="Email" name="email" required="" placeholder="eg. james@gmail.com" class="form-control" id="input"><br>

					<label id="label">Gender:</label><br>
					<label class="radio-inline" style="margin-left: 3%"><input type="radio" name="gender" value="male">Male</label>
				
					<label class="radio-inline"><input type="radio" name="gender" style="" value="female">Female</label>

					<label class="radio-inline" style="margin-left: 8%" id="labelgender"><input type="radio" name="gender" value="other">Other</label><br><br>

					<label id="label">Password</label><span class="glyphicon glyphicon-lock"></span><br>
					<input type="Password" name="password" class="form-control" required="" id="input"><br>
					<label id="label">Confirm Password</label><br>
					<input type="Password" name="cpword" class="form-control" id="input"><br>

				
					<button class="btn btn-primary btn-block" name="btnRegPat">Submit</button>
				</form>
			</fieldset>			
		</div>
	</div>

	<style type="text/css">

		#myForm{
			
		}
		body{

		}
		#label{
			margin-left: 3%;
		}
		#input{
			margin-left: 3%;
			width: 80% !important;
		}
		#firstDiv{
			margin-top: 135px;
			margin-bottom: 20px;
			
		}
		#secondDiv{
			/*background-image: url(doctors/giphy5.gif);*/
			margin-left: 0;
			/*margin-top: 5px;*/
			margin-bottom: 20px;
		}
		form{
			background-color: #d3c490;
		}
		legend{
		
		}
		img{
			width: 200px;
			height: 200px;
		}
		#formDoc{
			background-color: #dbdce0;
		}
		#formPat{
			background-color: #ffe9c1;
		}
		#legendDoc{
			background-color: #dbdce0;
		}
		#legendPat{
			background-color: #ffe9c1;
		}
	</style>
</body>
</html>
<!-- blood-cells-gif -->