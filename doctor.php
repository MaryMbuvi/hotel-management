
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

 				h4{
				 	color: #0800a2 !important;
				 	font-family: calibri;
				 	margin-top: 0px;
				 	text-align: center;
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
	background-color: #bba591;
	margin-top: 150px;
	
}
body{
	background-color: #f9fafc;
}
/*.table{
	background-color: #;
}*/

	</style>

	<div class="col-md-12">
		<div class="col-md-9 col-md-offset-1" id="div1">
<h2>View Patient Records</h2>;
<!-- <form><input type="hidden" name="id" value="<?php echo $id; ?>"><br></form> -->
			<table class="table table-hover table-striped" cellspacing="20" cellpadding="20">
				<tr>		
					<th>id</th>
					<th>Full name</th>
					<th>Email Address</th>
					<th>Age</th>
					<th>Symptoms</th>	
					<th><label for="disabledSelect">Mark case</label></th>			
					<th>Edit</th>
					<th>Action</th>
				</tr>

				<?php 
			$db = mysqli_connect('localhost','root','','hospital');
			$fetch = mysqli_query($db, "SELECT * fROM records");

			while ($data=mysqli_fetch_assoc($fetch)) {
				# code...
				extract($data);



			echo "<tr>";
			echo "<td><span disabled='disabled'>$id</span></td>";
			echo "<td><span disabled='disabled'>$fname</span>";
			echo "<td><span disabled='disabled'>$email</span></td>";
			echo "<td><span disabled='disabled'>$age</span></td>";
			echo "<td><span disabled='disabled'>$symptom</span></td>";
			echo "<td id='ch'><span disabled='disabled'><select name='dropdown' id='disabledSelect'>
			<option value='mark' selected>Resolved</option>
<option value='mark' selected>New case</option>
<option value='mark'>In_Progress</option>
<option value='mark'>Resolved</option>
<option value='mark'>Pending</option>
</select></span></td>";
			echo "<td><a href=\"edit.php?id=$id\"><h4><span class='glyphicon glyphicon-edit' title='Edit'></span></h4></a><td>"; 
			
			echo "<a href='delete.php?id=$id'onClick=\"return confirm('Are you sure you want to delete?')\"><h4><span class='glyphicon glyphicon-trash' title='Delete'></span></h4></a></td>";
			echo "</tr>";


			}
	 ?>
	</table>
  <style type="text/css">
 	table{
 		border-style: dashed;
 		border-color: 2px solid brown;
 		colpa
 	}
 	#ch{
 		text-align: center;
 	}
 </style>
	
		</div>
	</div>

</body>
</html>