	<?php include('edit.php') ?>
	<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM records WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$check = $n['check'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
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
<body>

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
#div1{
	margin-top: 147px;
}


	</style>


	<div class="container_fluid">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2" style="background-color: #b89d74;" id="div1">
				<h2>Book an Appointment</h2>
			<fieldset class="fieldset">
				<form class="form form-horizontal" method="POST" action="rate.php" style="margin-top: 20px; margin-bottom: 10px;">

							
					<label>Enter Full name:</label><span class="glyphicon glyphicon-user"></span>
					<input class="form-control" type="text" name="fname" placeholder="Full name" required=""><br>
					<label>Enter email Address:</label><span class="glyphicon glyphicon-envelope"></span>
					<input class="form-control" type="email" name="email" placeholder="e.g. john@gmail.com" required=""><br>
					<label>Age:</label>
					<input class="form-control" type="number" name="age" required="" placeholder="your age"><br>

					<label>Describe your Symptom</label><br>
					<textarea rows="4" cols="50" class="form-control" placeholder="How are you feeling?" name="symptom"></textarea><br>

					<div class="btn-group">

				<button class="btn btn-block btn-info" name="symptoms">Save & Submit</button><button class="btn btn-block btn-success" name="print" onclick="">View Your record</button>
				</div>
				</form>
			</fieldset>
			</div>
		</div>
		
	</div>
</body>
</html>



			