	
	<?php 

		session_start();

		$uname = "";
		$email = "";
		$errors =array();
		

		$db	= mysqli_connect('localhost','root','','hospital');

		
		if (isset($_POST['btnRegDoc'])) {


			$fname = mysqli_real_escape_string($db, $_POST['fname']);
			$lname = mysqli_real_escape_string($db, $_POST['lname']);
			$phone = mysqli_real_escape_string($db, $_POST['phone']);
			$uname = mysqli_real_escape_string($db, $_POST['uname']);
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$gender = mysqli_real_escape_string($db, $_POST['gender']);
			$employee_num = mysqli_real_escape_string($db, $_POST['employeeNo']);
			$password = mysqli_real_escape_string($db, $_POST['password']);	
			$confirmPword = mysqli_real_escape_string($db, $_POST['confirmPword']);
			# code...


			if (empty($fname)) {
				array_push($errors, "First name cannot be empty");
				# code...
			}if (empty($lname)) {
				array_push($errors, "Last name cannot be empty");
				# code...
			
			}if (empty($phone)) {
				array_push($errors, "Username cannot be empty");
				# code...
			}if (empty($uname)) {
				array_push($errors, "Username cannot be empty");
				# code...
			}if (empty($email)) {
				array_push($errors, "Please enter email");
				# code...
			}if (empty($employee_num)) {
				array_push($errors, "Please enter employee ID");
				# code...
			}if (empty($gender)) {
				array_push($errors, "Please enter password");
				# code...
			}if (empty($password)) {
				array_push($errors, "Please enter password");
				# code...
			}if ($confirmPword!=$password) {
				array_push($errors, "Password mismatch");
				# code...
			}

			$userquery = "SELECT * FROM doctors WHERE uname='$uname' OR email='$email' OR employeeNo='$employee_num' LIMIT 1";
			$hospital =mysqli_query($db, $userquery);

			
			$bb = mysqli_fetch_assoc($hospital);
			if ($bb) {
				//=== MEANS IDENTICAL To
				if ($bb['uname']===$uname) {

					array_push($errors, "username exists");
					# code...
				}if ($bb['email']===$email) {
					array_push($errors, "Email exists");
					# code...
				}if ($bb['employeeNo']===$employee_num) {
					array_push($errors, "Employee already exists");
					# code...
				}
				# code...
			}
			if (count($errors)==0) {
				$password = md5($password);
				$data = "INSERT INTO doctors(id,fname,lname,uname,phone,email,gender,employeeNo,password) values(null,'$fname', '$lname', '$uname','$phone', '$email', '$gender', '$employee_num','$password')";

				mysqli_query($db, $data);
					# code...

				$_SESSION['uname'] = $uname;
				$_SESSION['success'] = "welcome";

				echo "Details successfully submitted";

				header('location: nextDoc.php');
				// echo "Data has been saved successfully";
				# code...
			}
		}




if (isset($_SESSION['employeeNo'])) {
	//redirecting if there is already a session with the name username
	header("Location: index.php");
}
//check whether data with the name username has been submitted
if (isset($_POST['btnDoc'])) {
	//variables to hold our submitted data with post
	$employee_num = $_POST['employeeNo'];
	$password = md5($_POST['password']);


	//our sql statement that we will execute
	$sql = "SELECT * FROM doctors WHERE employeeNo='$employee_num' AND password='$password'";
	//Executing the sql query with the connection
	$re = mysqli_query($db, $sql);

	
	//check to see if there is any record / row in the database
	//if there is then the user exists
	if (mysqli_num_rows($re)) {
		//echo "Welcome";
		//creating a session name with username ad inserting the submitted username
		$_SESSION['employeeNo'] = $employee_num;
		//redirecting to homepage
		header("Location: doctor.php");
	}else{
		//display error if no record exists
		echo "Error : Invalid Login Credentials";
	}
}


// 	if (isset($_POST['employeeNo'])) {
// 	# code...
// 	$employee_num=mysqli_real_escape_string($db,$_POST['employeeNo']);
// 	$password=mysqli_real_escape_string($db,$_POST['password']);
	


// 	if (empty($employee_num)) {
// 		array_push($errors, "Input username");
// 		# code...
// 	}
// 	if (empty($password)) {
// 		array_push($errors, "input password");
// 		# code...
// 	}
// 	if (count($errors)==0) {
// 		$password=md5($password);
// 		$data = "SELECT * FROM doctors WHERE employeeNo ='$employee_num' AND password ='$password'";
// 		$results=mysqli_query($db,$data);

// 		if (mysqli_num_rows($results)==1) {
// 			$_SESSION['employee_num']=$employeeNo;
// 			$_SESSION['success']="Welcome!!!";

// 			header('location: doctor.php');
// 			# code...
// 		}else{
// 			echo "Error : Invalid Login Credentials";
// 		}
// 	}
// }


	 ?>
