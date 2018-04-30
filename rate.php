<?php 

$errors = array();
$db = mysqli_connect('localhost','root','','hospital');

if (isset($_POST['submitRate'])) {

	$timeliness = mysqli_real_escape_string($db,$_POST['Timeliness']);
	$quality = mysqli_real_escape_string($db,$_POST['Quality']);
	$courtesy = mysqli_real_escape_string($db,$_POST['Courtesy']);

	if (empty($_POST['Timeliness'])) {
		# code...
		array_push($errors, "Please fill the Timeliness checkbox");
	}
	if (empty($_POST['Quality'])) {
		# code...
		array_push($errors, "Please fill the Quality checkbox");
	}
	if (empty($_POST['Courtesy'])) {
		# code...
		array_push($errors, "Please fill the Courtesy checkbox");
	}

	if (count($errors)==0) {
		# code...
		$data = "INSERT INTO `rates`(`Id`, `Timeliness`, `Quality`, `Courtesy`) values (null,'$timeliness','$quality','$courtesy')";
		$redirectUrl='http://localhost/landingPage/index.php';

		mysqli_query($db, $data);
		
		
		echo '<script type="application/javascript">alert("You have successfully submitted your details"); window.location.href = "'.$redirectUrl.'";</script>';
	# code...
	}else{
		echo '<script type="application/javascript">alert("Please complete checking"); window.location.href = "'.$redirectUrl.'";</script>';
	}
}


if (isset($_POST['symptoms'])) {
	# code...

	$fullname = mysqli_real_escape_string($db,$_POST['fname']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$age = mysqli_real_escape_string($db,$_POST['age']);
	$symptom = mysqli_real_escape_string($db,$_POST['symptom']);

	if (empty($_POST['fname'])) {
		# code...
		array_push($errors, "Please fill the Timeliness checkbox");
	}
	if (empty($_POST['email'])) {
		# code...
		array_push($errors, "Please fill the Quality checkbox");
	}
	if (empty($_POST['age'])) {
		# code...
		array_push($errors, "Please fill the Courtesy checkbox");
	}
	if (empty($_POST['symptom'])) {
		# code...
		array_push($errors, "Please fill the Courtesy checkbox");
	}

	if (count($errors)==0) {
		# code...
		extract($_POST);
		$sign = "INSERT INTO `records`(`id`, `fname`, `email`, `age`, `symptom`) VALUES(null,'$fullname','$email','$age','$symptom')";

		$db=mysqli_query($db, $sign);


		if ($db) {
			# code...
					# code...
			$redirectUrl='http://localhost/landingPage/patient.php';
		echo '<script type="application/javascript">alert("You have successfully submitted your details"); window.location.href = "'.$redirectUrl.'";</script>';
				 
		}
	}

}

// if (isset($_POST['print'])) {
// 	# code...

	
// }
 ?>
