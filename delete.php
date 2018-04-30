<?php 
	$db = mysqli_connect('localhost','root','','hospital');
	if (isset($_GET['id'])) {
		extract($_GET);
		mysqli_query($db, "DELETE from records where id=$id");
		# code...
	}


	header('location:doctor.php')
 ?>