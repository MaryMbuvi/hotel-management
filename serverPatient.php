<?php 

$errors = array();
$db = mysqli_connect('localhost','root','','hospital');

if (isset($_POST['btnRegPat'])) {
	$firstname=mysqli_real_escape_string($db,$_POST['fname']);
	$lastname=mysqli_real_escape_string($db,$_POST['lname']);
	$username=mysqli_real_escape_string($db, $_POST['uname']);
	$phone=mysqli_real_escape_string($db,$_POST['phone']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$gender=mysqli_real_escape_string($db,$_POST['gender']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$confirmPword=mysqli_real_escape_string($db,$_POST['cpword']);


	if (empty($firstname)) {
		array_push($errors, "Please enter your full name");
		# code...
	}if (empty($lastname)) {
		array_push($errors, "Please enter your full name");
		# code...
	}if (empty($username)) {
		array_push($errors, "Please enter your Username");
		# code...
	}if (empty($phone)) {
		# code...
		array_push($errors, "Please enter your phone number");
	}if (empty($email)) {
		# code...
		array_push($errors, "Please enter your email");
	}if (empty($gender)) {
		# code...
		array_push($errors, "Gender cannot be empty");
	}if (empty($password)) {
		# code...
		array_push($errors, "Please enter your password");
	}
	# code...

	if ($confirmPword!=$password) {
		# code...
		array_push($errors, "Password Mismatch");
	}

	$userquery="SELECT * FROM patients WHERE uname='$username' OR email='$email' LIMIT 1";
	$hospital=mysqli_query($db,$userquery);

	$mary=mysqli_fetch_assoc($hospital);
	if ($mary) {
		if ($mary['uname']===$username) {
			# code...
			array_push($errors, "User name already exists");
		}if ($mary['email']===$email) {
			# code...
			array_push($errors, "Email belongs to an existing patient");
		}
		# code...
	}

	if (count($errors)==0) {
		# code...
		$password=md5($password);
		$data="INSERT INTO patients (fname,lname,uname,phone,email,gender,password) VALUES('$firstname','$lastname','$username','$phone','$email','$gender','$password')";

		mysqli_query($db, $data);
		$_SESSION['uname']=$username;
		$_SESSION['success']="Welcome";

		if ($db) {
			# code...
					# code...
			$redirectUrl='http://localhost/landingPage/index.php';
		echo '<script type="application/javascript">alert("You have successfully submitted your details"); window.location.href = "'.$redirectUrl.'";</script>';
				 
		}
	}
}
// .00000000


	if(isset($_SESSION['uname']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:index.php"); 
 }
if (isset($_POST['btnPatient'])) {

  $username = $_POST['uname'];
  $password = $_POST['password'];

  if (empty($uname)) {
    array_push($errors, "Username is required");
   }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM patients WHERE uname='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['uname'] = $username;
      $_SESSION['success'] = "You are now logged in";  

      if ($db) {
			# code...
					# code...
			$redirectUrl='http://localhost/landingPage/patient.php';
		echo '<script type="application/javascript">alert("Login successfull. Please fill in your details and syptoms"); window.location.href = "'.$redirectUrl.'";</script>';
				 
		}
    }else {
      	$redirectUrl='http://localhost/landingPage/patient.php';
		echo '<script type="application/javascript">alert("Wrong username/password combination"); window.location.href = "'.$redirectUrl.'";</script>';
				 
		} 
  }
}
 ?>