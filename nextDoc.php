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
			<li><a href="Testimonials.php">Testimonial</a></li>
			<li><a href="Contact.php">Contact</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="fadeInDown">Services
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">Nursing Internship</a></li>	
				<li><a href="#">Tratment</a></li>
				<li><a href="#">Research</a></li>
				
				
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
	width: 30% !important;
	background-color: silver;
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
	background-color: #bba591;
	margin-top: 150px;
	height: 400px;
}

		img{
			width: 200px;
			height: 200px;
		}



	</style>



	<div class="col-md-12">
		<div class="col-md-9 col-md-offset-1" id="div1">
	<form method="POST" enctype="multipart/form-data" action="upload.php" style="margin-top: 50px; margin-left: 10%">
		<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
		<input type="text" name="names"	placeholder="file name" class="form-control"><br><br>
		<input type="submit" name="submit" value="UploadImage" class="btn btn-block btn-default">		
	</form>
	<?php 
		$db=mysqli_connect('localhost','root','','hospital');
		$k=mysqli_query($db, "SELECT * FROM upload");
		while ($l=mysqli_fetch_assoc($k)) {
			
		}
	 ?>
		</div>
	</div>
</body>
</html>